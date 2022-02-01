<?php
/**
 *  app/Http/Controllers/Admin/QuestionController.php
 *
 * Date-Time: 24.01.22
 * Time: 22:46
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PacketRequest;
use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Image;
use App\Models\Packet;
use App\Models\Question;
use App\Models\QuestionSection;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class QuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Inertia\Response
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Question/Index',[
            'data'=> Question::tableSearch($request->input('searchObj')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        QuestionSection::whereHas('parent', function($parent){
            $parent->whereNotNull('section_id');
        })->get()->map(function($item) use(&$questionSections) {
            $questionSections[] = [
                'key' => $item->id,
                'label' => $item->body
            ];
        });

        $answers = Answer::whereNull('next_question_id')->with('question')->get()->toArray();

        return Inertia::render('Question/Create',[
            'types' => getKeyValue(config('admin.question_type')),
            'questionSections' => $questionSections,
            'answers' => $answers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QuestionRequest $request): \Illuminate\Http\RedirectResponse
    {

        $model = new Question();
        $model->type = $request->input('type');
        $model->body = $request->input('body');
        $model->section_id = $request->input('section_id');
        $model->description = $request->input('description');
        $model->save();

        foreach ($request->input('answerItems') as $answer) {
            $answerModel = new Answer();
            $answerModel->body = $answer['body'];
            $answerModel->price = $answer['price'];
            $answerModel->question_id = $model->id;
            $answerModel->save();

            if ($answer['image'] != null) {
                $imageModel = Image::findOrFail($answer['image']);
                // save image
                $imageModel->imageable()->associate($answerModel);
                $imageModel->save();
            }
        }

        if ($request->input('previous_answers')) {
            foreach ($request->input('previous_answers') as $answerId) {
                $answer = Answer::findOrFail($answerId);
                $answer->next_question_id = $model->id;
                $answer->save();
            }
        }

        if ($request->input('image') != null) {
            $imageModel = Image::findOrFail($request->input('image'));
            // save image
            $imageModel->imageable()->associate($model);
            $imageModel->save();
        }


        return redirect()->back()->with('message', 'Yay it worked');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Inertia\Response
     */
    public function edit(int $id): Response
    {
        $question = Question::with('answers')->findOrFail($id);

        QuestionSection::whereHas('parent', function($parent){
            $parent->whereNotNull('section_id');
        })->get()->map(function($item) use(&$questionSections) {
            $questionSections[] = [
                'key' => $item->id,
                'label' => $item->body
            ];
        });


        $answers = Answer::whereNull('next_question_id')->whereNotIn('id',$question->answers_ids)->OrWhereIn('id',$question->previous_answers_ids)->with('question')->get()->toArray();

        return Inertia::render('Question/Update',[
            'item' => $question,
            'types' => getKeyValue(config('admin.question_type')),
            'questionSections' => $questionSections,
            'answers' => $answers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\PacketRequest $request
     * @param \App\Models\Packet $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(QuestionRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Question::findOrFail($id);
        $model->type = $request->input('type');
        $model->body = $request->input('body');
        $model->section_id = $request->input('section_id');
        $model->description = $request->input('description');
        $model->save();

        if ($request->input('image') != $model->image) {
            $model->image()->delete();

            if ($request->input('image')) {
                $imageModel = Image::findOrFail($request->input('image'));
                // save image
                $imageModel->imageable()->associate($model);
                $imageModel->save();
            }
        }


        $previousAnswersIds = $request->input('previous_answers') ?? [];
        $previousAnswers = $model->previousAnswers()->get();
        if (count($previousAnswers)) {
            foreach ($previousAnswers as $previousAnswer) {
                if (!in_array($previousAnswer->id,$previousAnswersIds)) {
                    $previousAnswer->next_question_id = null;
                    $previousAnswer->save();
                    if (count($previousAnswersIds)) {
                        $previousAnswersIds = array_diff($previousAnswersIds, [$previousAnswer->id]);
                    }
                }

            }
        }

        if (count($previousAnswersIds)) {
            foreach ($previousAnswersIds as $answerId) {
                $answer = Answer::findOrFail($answerId);
                $answer->next_question_id = $model->id;
                $answer->save();
            }
        }

        $oldAnswerIds = [];
        $oldAnswers = $model->answers()->get();
        foreach ($request->input('answerItems') as $answer) {
            if (isset($answer['id'])) {
                $answerModel = Answer::findOrFail($answer['id']);
                $answerModel->body = $answer['body'];
                $answerModel->price = $answer['price'];
                $answerModel->question_id = $model->id;
                $answerModel->save();

                $oldAnswerIds [] = $answer['id'];
                if ($answer['image'] != $answerModel->image) {
                    $answerModel->image()->delete();
                    if ($answer['image']) {
                        $imageModel = Image::findOrFail($answer['image']);
                        // save image
                        $imageModel->imageable()->associate($answerModel);
                        $imageModel->save();
                    }
                }
            } else {
                $answerModel = new Answer();
                $answerModel->body = $answer['body'];
                $answerModel->price = $answer['price'];
                $answerModel->question_id = $model->id;
                $answerModel->save();


                if ($answer['image'] != null) {
                    $imageModel = Image::findOrFail($answer['image']);
                    // save image
                    $imageModel->imageable()->associate($answerModel);
                    $imageModel->save();
                }
            }
        }

        if (count($oldAnswers)) {
            foreach ($oldAnswers as $oldAnswer) {
                if (!in_array($oldAnswer->id,$oldAnswerIds)) {
                    $oldAnswer->delete();
                }
            }
        }

        return redirect()->back()->with('message', 'Yay it worked');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContentText $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Packet::findOrFail($id);
        $model->delete();

        return redirect()->back()->with('message', 'Yay it worked');
    }
}

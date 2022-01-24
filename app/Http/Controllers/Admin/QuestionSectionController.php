<?php
/**
 *  app/Http/Controllers/Admin/QuestionSectionController.php
 *
 * Date-Time: 23.01.22
 * Time: 20:54
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentImageRequest;
use App\Http\Requests\ContentTextRequest;
use App\Http\Requests\QuestionSectionRequest;
use App\Models\ContentImage;
use App\Models\ContentText;
use App\Models\Image;
use App\Models\QuestionSection;
use App\Models\User;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class QuestionSectionController extends Controller
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
        return Inertia::render('QuestionSection/Index',[
            'data'=> QuestionSection::with('parent')->tableSearch($request->input('searchObj')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        $questionSections = [];
        QuestionSection::all()->map(function($item) use(&$questionSections) {
            $questionSections[] = [
                'key' => $item->id,
                'label' => $item->body
            ];
        });
        return Inertia::render('QuestionSection/Create',[
            'questionSections' => $questionSections
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QuestionSectionRequest $request): \Illuminate\Http\RedirectResponse
    {
        $model = new QuestionSection();
        $model->body = $request->input('body');
        $model->section_id = $request->input('section_id');
        $model->save();

        return redirect()->route('question-section.index')->with('message', 'Yay it worked');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Inertia\Response
     */
    public function edit(QuestionSection $questionSection): Response
    {
        $questionSections = [];
        QuestionSection::all()->map(function($item) use(&$questionSections, $questionSection) {
            if ($item->id !== $questionSection->id) {
                $questionSections[] = [
                    'key' => $item->id,
                    'label' => $item->body
                ];
            }
        });

        return Inertia::render('QuestionSection/Update',[
            'item' => $questionSection,
            'questionSections' => $questionSections
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     * @param \App\Models\ContentText $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(QuestionSectionRequest $request, QuestionSection $model): \Illuminate\Http\RedirectResponse
    {
        $model->body = $request->input('body');
        $model->section_id = $request->input('section_id');
        $model->save();

        return redirect()->route('question-section.index')->with('message', 'Yay it worked');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContentText $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(QuestionSection $model): \Illuminate\Http\RedirectResponse
    {
        $model->delete();

        return redirect()->route('question-section.index')->with('message', 'Yay it worked');
    }
}

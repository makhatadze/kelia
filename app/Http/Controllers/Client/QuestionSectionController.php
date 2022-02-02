<?php
/**
 *  app/Http/Controllers/Client/QuestionSectionController.php
 *
 * Date-Time: 02.02.22
 * Time: 08:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionSection;
use Illuminate\Http\Request;

class QuestionSectionController extends Controller
{
    public function sections() {
        return QuestionSection::with('children')->whereNull('section_id')->get();
    }

    public function questions(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        return Question::with('answers','answers.nextQuestion','answers.nextQuestion.answers','answers.nextQuestion.answers.nextQuestion')
            ->where('section_id', $request->input('id'))
            ->get()
            ->map(function (Question $el) {
                $el->answers = $el->answers->map(function (Answer $answer) {
                    return $answer;
                });

                return $el;
            });
    }

}

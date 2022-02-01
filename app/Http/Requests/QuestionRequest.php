<?php
/**
 *  app/Http/Requests/QuestionRequest.php
 *
 * Date-Time: 01.02.22
 * Time: 22:01
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => 'required',
            'body' => 'required|string|max:255',
            'section_id' => 'required|exists:question_sections,id',
            'image' => 'nullable|exists:images,id',
            "answerItems"    => "required|array|min:1",
            'answerItems.*.body' => 'required|string|max:255',
            'answerItems.*.price' => 'nullable|numeric|max:99999',
            'answerItems.*.image' => 'nullable|exists:images,id'
        ];
    }
}

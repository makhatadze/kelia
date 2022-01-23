<?php
/**
 *  app/Http/Requests/ContentTextRequest.php
 *
 * Date-Time: 23.01.22
 * Time: 19:07
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentTextRequest extends FormRequest
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
            'title' => 'required',
            'tag' => 'required',
            'section' => 'required',
            'text_type' => 'required'
        ];
    }
}

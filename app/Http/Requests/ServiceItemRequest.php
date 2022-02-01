<?php
/**
 *  app/Http/Requests/ServiceItemRequest.php
 *
 * Date-Time: 01.02.22
 * Time: 13:09
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceItemRequest extends FormRequest
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
            'head_title' => 'required',
            'sub_text' => 'nullable',
            'body_text_head' => 'nullable',
            'body_text_bottom' => 'nullable',
            'imageBg' => 'required'
        ];
    }
}

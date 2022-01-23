<?php
/**
 *  app/Http/Requests/ContentImageRequest.php
 *
 * Date-Time: 23.01.22
 * Time: 10:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentImageRequest extends FormRequest
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
            'tag' => 'required',
            'section' => 'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}

<?php
/**
 *  app/Http/Requests/PacketRequest.php
 *
 * Date-Time: 24.01.22
 * Time: 18:33
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacketRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'tag' => 'nullable|string',
            'mini_sub_text' => 'nullable|string|max:255',
            "packetItems"    => "required|array|min:1",
            'packetItems.*.text' => 'required|string|max:255'
        ];
    }
}

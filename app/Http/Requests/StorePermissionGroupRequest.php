<?php
/**
 *  app/Http/Requests/StorePermissionGroupRequest.php
 *
 * Date-Time: 23.01.22
 * Time: 10:54
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*You can change to if you want*/
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}

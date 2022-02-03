<?php
/**
 *  app/Http/Controllers/Admin/ContactController.php
 *
 * Date-Time: 24.01.22
 * Time: 09:35
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentImageRequest;
use App\Http\Requests\ContentTextRequest;
use App\Models\Contact;
use App\Models\ContentImage;
use App\Models\ContentText;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
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
        return Inertia::render('Contact/Index',[
            'data'=> Contact::tableSearch($request->input('searchObj')),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Contact $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Contact::findOrFail($id);
        $model->delete();
        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt','content' => '<b>'.$model->id. '</b> deleted']);
        return redirect()->back();
    }
}

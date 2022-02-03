<?php
/**
 *  app/Http/Controllers/Admin/ChiffrageController.php
 *
 * Date-Time: 03.02.22
 * Time: 09:58
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chifrage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class ChiffrageController extends Controller
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
        return Inertia::render('Chiffrage/Index',[
            'data'=> Chifrage::orderBy('created_at','DESC')->tableSearch($request->input('searchObj')),
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
        $model = Chifrage::findOrFail($id);
        $model->delete();
        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt','content' => '<b>'.$model->id. '</b> deleted']);
        return redirect()->back();
    }
}

<?php
/**
 *  app/Http/Controllers/Admin/ServiceController.php
 *
 * Date-Time: 23.01.22
 * Time: 19:42
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class ServiceController extends Controller
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
        return Inertia::render('Service/Index',[
            'data'=> Service::tableSearch($request->input('searchObj')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('Service/Create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ServiceRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceRequest $request): \Illuminate\Http\RedirectResponse
    {
        $model = new Service();
        $model->title = $request->input('title');
        $model->save();

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$model->title. '</b> created']);
        return redirect()->route('service.index')->with('message', 'Yay it worked');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     *
     * @return \Inertia\Response
     */
    public function edit(Service $service): Response
    {
        return Inertia::render('Service/Update',[
            'item' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ServiceRequest $request
     * @param \App\Models\Service $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ServiceRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Service::findOrFail($id);
        $model->title = $request->input('title');
        $model->save();

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$model->title. '</b> updated']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Service::findOrFail($id);
        $model->delete();

        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt','content' => '<b>'.$id. '</b> deleted']);
        return redirect()->back();
    }
}

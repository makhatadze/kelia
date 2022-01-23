<?php
/**
 *  app/Http/Controllers/Admin/ServiceItemController.php
 *
 * Date-Time: 23.01.22
 * Time: 20:12
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ServiceItemController extends Controller
{
    /**
     * @var \App\Services\ImageUploadService
     */
    private ImageUploadService $imageUploadService;

    /**
     * @param \App\Services\ImageUploadService $imageUploadService
     */
    public function __construct(ImageUploadService $imageUploadService) {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     *
     * @return \Inertia\Response
     */
    public function index(Request $request, int $id): Response
    {
        $service = Service::findOrFail($id);

        return Inertia::render('Service/ServiceItem/Index',[
            'data'=> ServiceItem::where('service_id',$id)->tableSearch($request->input('searchObj')),
            'service' => $service
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(int $id): Response
    {
        $service = Service::findOrFail($id);
        return Inertia::render('Service/ServiceItem/Create',[
            'service' => $service
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

        return redirect()->route('service.index')->with('message', 'Yay it worked');
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

        return redirect()->route('service.index')->with('message', 'Yay it worked');
    }
}

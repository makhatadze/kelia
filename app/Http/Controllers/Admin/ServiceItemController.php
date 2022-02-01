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
use App\Http\Requests\ServiceItemRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Image;
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
     * @param int $id
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
     * @param int $serviceId
     * @param \App\Http\Requests\ServiceItemRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(int $serviceId, ServiceItemRequest $request): \Illuminate\Http\RedirectResponse
    {
        $bgImage = Image::findOrFail($request->input('imageBg'));

        $model = new ServiceItem();
        $model->service_id = $serviceId;
        $model->title = $request->input('title');
        $model->head_title = $request->input('head_title');
        $model->sub_text = $request->input('sub_text');
        $model->body_text_head = $request->input('body_text_head');
        $model->body_text_bottom = $request->input('body_text_bottom');
        $model->save();

        // save image
        $bgImage->imageable()->associate($model);
        $bgImage->save();


        if ($request->input('imageFirst')) {
            $firstImage = Image::findOrFail($request->input('imageFirst'));
            $firstImage->imageable()->associate($model);
            $firstImage->save();
        }

        if ($request->input('imageSecond')) {
            $secondImage = Image::findOrFail($request->input('imageSecond'));
            $secondImage->imageable()->associate($model);
            $secondImage->save();
        }



        return redirect()->back()->with('message', 'Yay it worked');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     * @param \App\Models\ServiceItem $serviceItem
     *
     * @return \Inertia\Response
     */
    public function edit(Service $service, ServiceItem $serviceItem): Response
    {
        return Inertia::render('Service/ServiceItem/Update',[
            'service' => $service,
            'item' => $serviceItem,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ServiceItemRequest $request
     * @param \App\Models\Service $service
     * @param int $serviceItemId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ServiceItemRequest $request, Service $service, int $serviceItemId): \Illuminate\Http\RedirectResponse
    {
        $model = ServiceItem::findOrFail($serviceItemId);
        $model->title = $request->input('title');
        $model->head_title = $request->input('head_title');
        $model->sub_text = $request->input('sub_text');
        $model->body_text_head = $request->input('body_text_head');
        $model->body_text_bottom = $request->input('body_text_bottom');

        if ($request->input('imageBg') != $model->image_bg_id) {
            $imageModel = Image::findOrFail($request->input('imageBg'));
            $model->imageBg()->delete();
            // save image
            $imageModel->imageable()->associate($model);
            $imageModel->save();
        }

        if ($request->input('imageFirst') != $model->image_first_id || $request->input('imageFirst') === '') {
            $model->imageFirst()->delete();

            if ($request->input('imageFirst')) {
                $imageModel = Image::findOrFail($request->input('imageFirst'));
                // save image
                $imageModel->imageable()->associate($model);
                $imageModel->save();
            }
        }

        if ($request->input('imageSecond') != $model->image_second_id || $request->input('imageSecond') === '') {
            $model->imageSecond()->delete();

            if ($request->input('imageSecond')) {
                $imageModel = Image::findOrFail($request->input('imageSecond'));
                // save image
                $imageModel->imageable()->associate($model);
                $imageModel->save();
            }
        }

        return redirect()->back()->with('message', 'Yay it worked');
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

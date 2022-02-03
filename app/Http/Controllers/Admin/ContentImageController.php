<?php
/**
 *  app/Http/Controllers/Admin/ContentImageController.php
 *
 * Date-Time: 22.01.22
 * Time: 22:55
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentImageRequest;
use App\Models\ContentImage;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class ContentImageController extends Controller
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
     *
     * @return \Inertia\Response
     */
    public function index(Request $request): Response
    {
        return Inertia::render('ContentImage/Index',[
            'contentImages'=> ContentImage::tableSearch($request->input('searchObj')),
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections'))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('ContentImage/ContentImageCreate',[
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections'))
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentImageRequest $request): \Illuminate\Http\RedirectResponse
    {
        $imageModel = Image::findOrFail($request->input('image'));

        $contentImage = new ContentImage();
        $contentImage->tag = $request->input('tag');
        $contentImage->section = $request->input('section');
        $contentImage->save();
        $contentImage->image()->delete();

        // save image
        $imageModel->imageable()->associate($contentImage);
        $imageModel->save();
        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$contentImage->id. '</b> created']);

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Inertia\Response
     */
    public function edit(ContentImage $contentImage): Response
    {
        return Inertia::render('ContentImage/ContentImageUpdate',[
            'contentImage' => $contentImage,
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections'))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ContentImageRequest $request
     * @param \App\Models\ContentImage $contentImage
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentImageRequest $request, ContentImage $contentImage)
    {
        $contentImage->tag = $request->input('tag');
        $contentImage->section = $request->input('section');
        $contentImage->save();

        if ($request->input('image') != $contentImage->image_id) {
            $imageModel = Image::findOrFail($request->input('image'));
            $contentImage->image()->delete();
            // save image
            $imageModel->imageable()->associate($contentImage);
            $imageModel->save();
        }

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$contentImage->id. '</b> updated']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContentImage $contentImage
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $contentImage = ContentImage::findOrFail($id);
        $contentImage->delete();


        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt','content' => '<b>'.$id. '</b> deleted']);
        return redirect()->back();
    }
}

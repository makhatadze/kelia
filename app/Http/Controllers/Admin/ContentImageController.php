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
use App\Models\User;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        $contentImage = new ContentImage();
        $contentImage->tag = $request->input('tag');
        $contentImage->section = $request->input('section');
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $fileName = $this->imageUploadService->upload($file, 'content-images');

            // save image path into blog
            $contentImage->img_path = $fileName;
        }

        $contentImage->save();

        return redirect()->route('content-image.index')->with('message', 'Yay it worked');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

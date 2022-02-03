<?php
/**
 *  app/Http/Controllers/Admin/ContentTextController.php
 *
 * Date-Time: 23.01.22
 * Time: 19:05
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentImageRequest;
use App\Http\Requests\ContentTextRequest;
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

class ContentTextController extends Controller
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
        return Inertia::render('ContentText/Index',[
            'data'=> ContentText::tableSearch($request->input('searchObj')),
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections')),
            'textTypes' => getKeyValue(config('admin.other.text_type')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('ContentText/Create',[
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections')),
            'textTypes' => getKeyValue(config('admin.other.text_type')),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentTextRequest $request): \Illuminate\Http\RedirectResponse
    {
        $model = new ContentText();
        $model->title = $request->input('title');
        $model->tag = $request->input('tag');
        $model->section = $request->input('section');
        $model->text_type = $request->input('text_type');
        $model->save();

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$model->id. '</b> created']);
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Inertia\Response
     */
    public function edit(ContentText $contentText): Response
    {
        return Inertia::render('ContentText/Update',[
            'item' => $contentText,
            'tags' => getKeyValue(config('admin.other.tags')),
            'sections' => getKeyValue(config('admin.other.sections')),
            'textTypes' => getKeyValue(config('admin.other.text_type')),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     * @param \App\Models\ContentText $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentTextRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $model = ContentText::findOrFail($id);
        $model->title = $request->input('title');
        $model->tag = $request->input('tag');
        $model->section = $request->input('section');
        $model->text_type = $request->input('text_type');
        $model->save();

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b>'.$model->id. '</b> updated']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContentText $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $model = ContentText::findOrFail($id);
        $model->delete();

        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt','content' => '<b>'.$id. '</b> deleted']);
        return redirect()->back();
    }
}

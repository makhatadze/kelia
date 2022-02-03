<?php
/**
 *  app/Http/Controllers/Admin/PacketController.php
 *
 * Date-Time: 24.01.22
 * Time: 18:18
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentTextRequest;
use App\Http\Requests\PacketRequest;
use App\Models\ContentText;
use App\Models\Image;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class PacketController extends Controller
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
        return Inertia::render('Packet/Index', [
            'data' => Packet::tableSearch($request->input('searchObj')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('Packet/Create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContentTextRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PacketRequest $request): \Illuminate\Http\RedirectResponse
    {

        $model = new Packet();
        $model->name = $request->input('name');
        $model->sub_text = $request->input('sub_text');
        $model->mini_sub_text = $request->input('mini_sub_text');
        $model->save();

        $model->items()->createMany($request->input('packetItems'));

        if ($request->input('image') != null) {
            $imageModel = Image::findOrFail($request->input('image'));
            // save image
            $imageModel->imageable()->associate($model);
            $imageModel->save();
        }

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt', 'content' => '<b>' . $model->id . '</b> created']);
        return redirect()->back();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Inertia\Response
     */
    public function edit(int $id): Response
    {
        $packet = Packet::with('items')->findOrFail($id);
        return Inertia::render('Packet/Update', [
            'item' => $packet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\PacketRequest $request
     * @param \App\Models\Packet $model
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PacketRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Packet::findOrFail($id);
        $model->name = $request->input('name');
        $model->sub_text = $request->input('sub_text');
        $model->mini_sub_text = $request->input('mini_sub_text');

        $model->save();

        if ($request->input('image') != $model->image_id || $request->input('image') === '') {
            $model->image()->delete();

            if ($request->input('image')) {
                $imageModel = Image::findOrFail($request->input('image'));
                $model->image()->delete();
                // save image
                $imageModel->imageable()->associate($model);
                $imageModel->save();
            }
        }
        $model->items()->delete();
        $model->items()->createMany($request->input('packetItems'));

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt', 'content' => '<b>' . $model->id . '</b> updated']);
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
        $model = Packet::findOrFail($id);
        $model->delete();

        Session::flash('toastr', ['type' => 'gradient-red-to-pink', 'position' => 'rt', 'content' => '<b>' . $id . '</b> deleted']);
        return redirect()->back();
    }
}

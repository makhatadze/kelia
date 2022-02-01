<?php
/**
 *  app/Http/Controllers/Client/HomeController.php
 *
 * Date-Time: 25.01.22
 * Time: 21:59
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ContentImage;
use App\Models\ContentText;
use App\traits\ClientResponse;

class HomeController extends Controller
{
    use ClientResponse;

    public function index() {
        $texts = ContentText::all()->where('tag', '=', config('admin.other.tags.home'));
        $images = ContentImage::all()->where('tag', '=', config('admin.other.tags.home'));

        //! services are injected from clientResponse
        return view('client.index', $this->clientMerged([
            'texts' => $texts,
            'images' => $images,
            'contentImage' => ContentImage::where('tag',config('admin.other.tags.home'))->first()
        ]));
    }


    public function immediateEncryption() {
        return view('client.immediate_encryption', $this->clientMerged());
    }
}

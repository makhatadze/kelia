<?php
/**
 *  app/Http/Controllers/Client/ServiceController.php
 *
 * Date-Time: 01.02.22
 * Time: 15:44
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ServiceItem;
use App\traits\ClientResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use ClientResponse;

    // client
    public function page(int $id) {
        $serviceItem = ServiceItem::findOrFail($id);

        return view('client.page', $this->clientMerged([
            'serviceItem' => $serviceItem
        ]));
    }
}

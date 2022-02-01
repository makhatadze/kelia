<?php
/**
 *  app/Http/Controllers/Client/PacketController.php
 *
 * Date-Time: 01.02.22
 * Time: 16:42
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Packet;
use App\traits\ClientResponse;
use Illuminate\Http\Request;

class PacketController extends Controller
{
    use ClientResponse;

    public function client() {
        $packets = Packet::with('items')->get();

        return view('client.packets', $this->clientMerged([
            'packets' => $packets
        ]));
    }
}

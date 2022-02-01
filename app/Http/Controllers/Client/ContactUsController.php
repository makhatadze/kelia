<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactUsController extends Controller {

    public function storeClient(Request $request): RedirectResponse {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "date" => "required",
            "time" => "required",
            "mobile" => "required",
            "message" => "nullable",
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->date = $request->input('date') ? Carbon::createFromFormat('d/m/Y', $request->input('date'))->toDateString() : '';
        $contact->time = $request->input('time');
        $contact->mobile = $request->input('mobile');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->back();
    }

    public function destroy(int $id): RedirectResponse {
        ContactUs::destroy($id);

        return redirect()->back()->with('message', 'Deleted successfully !');
    }

    public function upload(Request $request) {

    }
}

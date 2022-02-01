<?php

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\traits\ClientResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use function request as requestAlias;

class UserController extends Controller {
    use ClientResponse;

    public function profile() {
        $user = $this->user();
//        $chiffrages = ChiffrageClient::where('email', '=', $user->email)->paginate(10);

        return view('client.profile', $this->clientMerged([
            'user' => $user,
            'chiffrages' => []
        ]));
    }

    public function registerPage(): View {
        return view('client.register', $this->clientMerged());
    }

    public function register(Request $request): RedirectResponse {
        $request->validate([
            "name" => "required",
            "mail" => "required|email|unique:users,email",
            "password" => "required|string|min:5",
            "city" => "required",
            "address" => "required",
            "postalCode" => "required",
            "phone" => "nullable"
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('mail');
        $user->address = $request->input('address');
        $user->postalCode = $request->input('postalCode');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        auth()->login($user);

        return redirect()->route('client_profile');
    }

    public function loginPage(): View {
        return view('client.login', $this->clientMerged());
    }

    public function login(Request $request): RedirectResponse {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $credentials = $request->only(['email', 'password']);


        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('client_profile'));
        }

        return redirect()->route('login_client_page')->with('Authentication failed please check your email or passwrod');
    }

    public function update(Request $request): RedirectResponse {
        $user = $this->user();
        $user->name = $request->input('name') ?? $user->name;
        $user->last_name = $request->input('last_name') ?? $user->last_name;
        $user->display_name = $request->input('display_name') ?? $user->display_name;
        $user->email = $request->input('email') ?? $user->email;
        $user->phone = $request->input('phone') ?? $user->phone;
        $user->city = $request->input('city') ?? $user->city;
        $user->address = $request->input('address') ?? $user->address;
        $user->postalCode = $request->input('postalCode') ?? $user->postalCode;

        // update user
        $user->save();

        return redirect()->back()->with('message', 'Updated successfully !');
    }

    public function signOut(): string {
        Session::flush();
        Auth::logout();

        return redirect()->route('login_client_page');
    }

    public function profileAdmin() {
        $user = Auth::user();

        return view('content.user.profile', [
            'user' => $user
        ]);
    }

    /*** @throws ValidationException */
    public function updateAdmin(Request $request): RedirectResponse {
        $request->validate([
            'email' => ['nullable', 'email']
        ]);

        $user = User::findOrFail(Auth::id());
        $userCheckEmail = User::where('email', '=', $request->input('email'))->first();

        // user email exists in database
        if ($userCheckEmail && $user->email !== $userCheckEmail->email) {
            throw ValidationException::withMessages([
                'email' => 'Email already in user'
            ]);
        }

        $user->name = $request->input('name') ?? $user->name;
        $user->last_name = $request->input('last_name') ?? $user->last_name;
        $user->display_name = $request->input('display_name') ?? $user->display_name;
        $user->email = $request->input('email') ?? $user->email;
        $user->phone = $request->input('phone') ?? $user->phone;
        $user->city = $request->input('city') ?? $user->city;

        // update user
        $user->save();

        return redirect()->back()->with('message', 'Updated successfully !');
    }

    private function user(): User {
        return requestAlias()->user();
    }
}

<?php

namespace App\Http\Controllers\API\Google;

use App\Http\Controllers\Controller;
use App\Models\User;
use Google_Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SingInController extends Controller
{
    public function handle(Request $request)
    {
        $client = new Google_Client(['client_id' => "68539947749-914ct5pkekskaqafdmmcjqrqc25alqma.apps.googleusercontent.com"]);
        $payload = $client->verifyIdToken($_POST["credential"]);

        $user = User::query()->where("email", $payload["email"])->first();

        if (is_null($user)) {
            /*@todo: add flash message for registration*/
            $user = User::query()->create([
                'name' => $payload["name"],
                'email' => $payload["email"],
            ]);

            $request->session()->regenerate();
        }

        /*@todo: add flash message for login*/
        Auth::login($user, true);

        return redirect()->route("mvp_features");
    }
}

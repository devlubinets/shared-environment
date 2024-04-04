<?php

namespace App\Http\Controllers\API\Google;

use App\Http\Controllers\Controller;
use App\Models\User;
use Google_Client;
use Illuminate\Support\Facades\Auth;

class SingInController extends Controller
{
    public function handle()
    {
        $client = new Google_Client(['client_id' => "68539947749-914ct5pkekskaqafdmmcjqrqc25alqma.apps.googleusercontent.com"]);
        $payload = $client->verifyIdToken($_POST["credential"]);

        $user = User::query()->where("email", $payload["email"])->first();

        if (is_null($user)) {
            $user = User::query()->create([
                'name' => $payload["name"],
                'email' => $payload["email"],
            ]);
        }

        Auth::login($user);

        return redirect()->route("mvp_features");
    }
}

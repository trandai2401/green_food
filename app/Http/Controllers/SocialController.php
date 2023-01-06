<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect()->getTargetUrl();
    }

    public function callback()
    {
        try {
            // return 1;
            $user = Socialite::driver('google')->stateless()->user();
            return dd($user);
            // $userDB = User::where('google_id', $user->id)->first();

            // if ($userDB) {
            //     Auth::login($userDB);
            //     return redirect('/home');
            // } else {
            //     $newUser = User::create([
            //         'tendangnhap' => $user->email,
            //         'name' => $user->name,
            //         'email' => $user->email,
            //         'google_id' => $user->id,
            //         'id_role' => '2',
            //         'password' => bcrypt('123456dummy')

            //     ]);

            //     giohang::insert(['id_user' => $newUser->id]);
            //     Auth::login($newUser);
            //     return redirect('/home');
            // }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

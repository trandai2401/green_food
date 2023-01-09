<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function index()
    {
        //
    }
    public function signIn(Request $request)
    {
        $userCheck = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if ($userCheck) {
            $user  = User::find(Auth::id());
            $user->api_token = Str::random(80);
            $user->save();


            $cartItems = CartItem::where('user_id', $user->id)->orderBy('created_at', 'desc')->where('activity', 1)->get();
            $cartItems->load('product');

            return [
                'user' => $user,
                'cart' => ['items' => $cartItems, 'amount' => count($cartItems)]
            ];
        } else {
            return response([
                'error' => 'Tên đăng nhập hoặc mật khẩu sai',
            ], 403);
        }
    }

    public function logOut()
    {
        $user = Auth::id();
        $u  = User::find(Auth::id());
        $u->api_token = Str::random(80);
        $u->save();
        return response([
            'message' => 'Đăng xuất thành công',
        ], 200);
    }

    public function check(Request $request)
    {
        $user = User::where('api_token', $request->query('api_token'))->get();

        if (count($user)) {

            $user->makeHidden('google_id');
            $cartItems = CartItem::where('user_id', $user[0]->id)->orderBy('created_at', 'desc')->where('activity', 1)->get();
            $cartItems->load('product');
            return response([
                'profile' => $user[0],
                'cart' => ['items' => $cartItems, 'amount' => count($cartItems)]
            ],);
        } else {
            return response(['error' => false], 403);
        }
    }
}

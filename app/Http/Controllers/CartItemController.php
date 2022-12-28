<?php

namespace App\Http\Controllers;

use App\Exceptions\DemoEx;
use App\Models\CartItem;
use App\Http\Requests\StoreCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class CartItemController extends Controller
{

    public function index()
    {
        $user_id = Auth::id();
        $cartItem = CartItem::where('user_id', $user_id)->get();
        return $cartItem;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartItemRequest $request)
    {
        try {
            //code...
            $user_id = Auth::id();

            $cartItem = CartItem::firstOrNew([
                'user_id' => $user_id,
                'product_id' => $request->product_id,
            ]);

            $cartItem['quantity'] += $request->quantity;
            $cartItem->save();

            return $cartItem;
        } catch (\Throwable $th) {
            throw new DemoEx;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartItemRequest  $request
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartItemRequest $request, $cartItemId)
    {
        if ($request['quantity'] <= 0) {
            $this->destroy($cartItemId);
        }
        $user_id = Auth::id();

        $cartItem = CartItem::firstOrNew([
            'user_id' => $user_id,
            'id' => $cartItemId,
        ]);

        try {
            $cartItem['quantity'] = $request['quantity'];
            $cartItem->save();
        } catch (\Throwable $th) {
        }

        return $cartItem;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($cartItemId)
    {
        $user_id = Auth::id();

        $cartItem = CartItem::firstOrNew([
            'user_id' => $user_id,
            'id' => $cartItemId,
        ]);

        $cartItem->delete();

        return response(['mess' => 'Đã xóa thành công']);
    }
}

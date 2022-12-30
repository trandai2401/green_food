<?php

namespace App\Http\Controllers;

use App\Exceptions\DemoEx;
use App\Models\CartItem;
use App\Http\Requests\StoreCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{

    public function index()
    {
        $user_id = Auth::id();
        $cartItem = CartItem::where('user_id', $user_id)->where('activity', 1)->get();
        $cartItem->load('product');
        return $cartItem;

        $cartItem = CartItem::whereRaw("user_id = ? and activity = 1 ", [$user_id]);
        $cartItem->join('products', 'products.id', '=', 'cart_items.product_id');
        $cartItem->join('categories', 'categories.id', '=', 'products.category_id');
        $cartItem->select('cart_items.*', 'categories.*');

        // $cartItem = CartItem::with('product')->get();
        $cartItem = $cartItem->get();
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

<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id  = Auth::id();
        $invoices = Invoice::whereRaw(" user_id = ?", [$user_id]);

        $invoices = $invoices->get();
        return $invoices;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        $user_id  = Auth::id();

        $invoices = Invoice::create([
            'name' => $request->name,
            'user_id' => $user_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'transport_fee' => $request->transport_fee,
            'status_id' => 1,
            'district_id' => $request->district_id
        ]);

        $cartItems = CartItem::where('user_id', $user_id)
            ->where('activity', 1)
            ->get();

        foreach ($cartItems as $item) {
            $item->payment($invoices->id);
            $invoices->total += $item->product->price * $item->quantity;
        }

        $invoices->save();

        return ($invoices);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);

        $cartItems  = CartItem::join('invoice_items', 'cart_items.id', 'invoice_items.cart_item_id');
        $cartItems->join('products', 'cart_items.product_id', 'products.id');
        $cartItems->join('reviews', 'invoice_items.id', '=', 'reviews.invoice_item_id', 'left outer');
        $cartItems->where('invoice_items.invoice_id', $id);
        $cartItems->selectRaw('cart_items.*,invoice_items.price,invoice_items.id as invoice_item_id, count(reviews.id) as reviewed');
        $cartItems->groupBy(DB::raw(' invoice_items.id'));
        $cartItems =  $cartItems->get();
        $cartItems->load('product');

        $invoice->invoice_items  = $cartItems;
        return  $invoice;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

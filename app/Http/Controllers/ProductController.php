<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $data = [];
        $categories->load('get4Product');
        // foreach ($categories as $category) {
        //     $data["$category->name"] = $category->get4Product();
        // }
        return $categories;
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'left' => $request->left,
            'producer' => $request->producer,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        $files = $request->file('file');

        foreach ($files as $file) {
            $image = $file;
            $image->move("img", $image->getClientOriginalName());
            $media = new Media;
            $media['product_id'] = $product->id;
            if ($image->getClientMimeType() == 'image/jpeg') {
                $media['type_media_id'] = 1;
            }

            $media['url'] = url("img/{$image->getClientOriginalName()}");
            $media->save();
        }

        $product->load('medias');

        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $limit  = $request->limit;
        if (!isset($limit)) {
            $limit = 8;
        }

        $page = $request->page;
        if (!isset($page)) {
            $page = 1;
        }

        $product = Product::find($id);
        $product->load('category');

        $reviews = Review::join('invoice_items', 'reviews.invoice_item_id', '=', 'invoice_items.id');
        $reviews->join('cart_items', 'invoice_items.cart_item_id', '=', 'cart_items.id');
        $reviews->join('products', 'cart_items.product_id', '=', 'products.id');
        $reviews->join('users', 'cart_items.user_id', '=', 'users.id');

        $reviews->where('products.id', $id);
        $reviews->selectRaw('reviews.*, users.name');
        $reviews->offset(($page - 1) * $limit);
        $reviews->limit($limit);

        $reviews = $reviews->get();








        $reviews2 = Review::join('invoice_items', 'reviews.invoice_item_id', '=', 'invoice_items.id');
        $reviews2->join('cart_items', 'invoice_items.cart_item_id', '=', 'cart_items.id');
        $reviews2->join('products', 'cart_items.product_id', '=', 'products.id');
        $reviews2->where('products.id', $request->id);
        $reviews2->selectRaw('reviews.*, products.name');
        $reviews2 = $reviews2->get();

        $pages = ceil($reviews2->count() / $limit);


        $product->rating_rate =  round($reviews2->Sum('rating') / ($reviews2->count() != 0 ? $reviews2->count() : 1), 1);







        return [
            'product' => $product,
            'reviews' => $reviews,
            'pages' => $pages,
            'ratings' => [
                1 => $reviews2->where('rating', 1)->count(),
                2 => $reviews2->where('rating', 2)->count(),
                3 => $reviews2->where('rating', 3)->count(),
                4 => $reviews2->where('rating', 4)->count(),
                5 => $reviews2->where('rating', 5)->count(),
            ]
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

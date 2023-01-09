<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDOException;

class ReviewController extends Controller
{

    public function search(Request $request)
    {
        $limit  = $request->limit;
        if (!isset($limit)) {
            $limit = 8;
        }

        $page = $request->page;
        if (!isset($page)) {
            $page = 1;
        }

        $ratings = $request->ratings;


        // return isset($request->product_id);


        $reviews = Review::join('invoice_items', 'reviews.invoice_item_id', '=', 'invoice_items.id');
        $reviews->join('cart_items', 'invoice_items.cart_item_id', '=', 'cart_items.id');
        $reviews->join('products', 'cart_items.product_id', '=', 'products.id');
        $reviews->where('products.id', $request->product_id);
        $reviews->selectRaw('reviews.*, products.name');
        $reviews->orderBy('reviews.created_at', 'desc');
        if (isset($ratings)) {
            $reviews->whereIn('reviews.rating', $ratings);
        }


        $count = $reviews->count();
        $pages = ceil($count / $limit);

        $reviews->offset(($page - 1) * $limit);
        $reviews->limit($limit);

        $reviews = $reviews->get();



        $reviews2 = Review::join('invoice_items', 'reviews.invoice_item_id', '=', 'invoice_items.id');
        $reviews2->join('cart_items', 'invoice_items.cart_item_id', '=', 'cart_items.id');
        $reviews2->join('products', 'cart_items.product_id', '=', 'products.id');
        $reviews2->where('products.id', $request->product_id);
        $reviews2->selectRaw('reviews.*, products.name');
        $reviews2 = $reviews2->get();

        return [
            'reviews' => $reviews,
            'ratings' => [
                1 => $reviews2->where('rating', 1)->count(),
                2 => $reviews2->where('rating', 2)->count(),
                3 => $reviews2->where('rating', 3)->count(),
                4 => $reviews2->where('rating', 4)->count(),
                5 => $reviews2->where('rating', 5)->count(),
            ],
            'pages' => $pages
        ];
    }

    public function check(Request $request)
    {
        try {
            $user_id = Auth::id();
            $invoice_item = InvoiceItem::find($request->query('id'));

            if ($invoice_item->invoice->status_id == 4 && $user_id == $invoice_item->invoice->user_id) {
                $review = Review::where('invoice_item_id', $request->query('id'))->get();
                if ($review->count() == 0) {
                    return true;
                }
            }
        } catch (\Throwable $th) {
            return false;
        }

        return false;
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreReviewRequest $request)
    {
        try {
            $invoice_item = InvoiceItem::find($request->invoice_item_id);
            if ($invoice_item) {
                //Kieerm tra don nay da thanh toan chua
                if (true) {
                    $review = Review::firstOrCreate([
                        'invoice_item_id' => $request->invoice_item_id,
                        'content' => $request->content,
                        'rating' => $request->rating
                    ]);
                    return $review;
                }
            }
        } catch (\Throwable | PDOException $th) {
            if ($th instanceof PDOException) {
                return response(['mesage' => 'bãn đã đánh giá sản phẩm này rồi'], 403);
            }
            return response(['mesage' => 'Bạn không thể review sản phẩm này1'], 403);
        }
        return response(['mesage' => 'Bạn không thể review sản phẩm này2'], 403);
    }


    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }
}

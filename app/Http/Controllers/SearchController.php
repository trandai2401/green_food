<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function index(Request $request)
    {
        $rs = Product::whereRaw(" bodau(products.name) like bodau(?)", ["%{$request->query('keyword')}%"]);
        $categories =  $request->query('categories');
        $price_starts  = $request->query('price_starts');
        $end_price = $request->query('end_price');
        $keyword = $request->query('keyword');
        // $rs->selectRaw('*','(select)');
        // $rs->selectRaw('sum(sum_sold.total_quantity) as price_with_tax', []);
        // sumSold

        // return isset($keyword);
        $rs->selectRaw('*, products.id as product_id');
        $rs->join('cart_items', 'products.id', '=', 'cart_items.product_id', 'left outer');
        $rs->select('products.*', DB::raw('SUM(quantity) as total_sales'))->groupBy('products.id');

        $rs->withCount('sumSold');
        // // $rs->join('categories', 'products.category_id', '=', 'categories.id');

        // $rs = $rs->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $rs = $rs->get();


        return $rs;
    }
}







        // $rs = $rs->whereRaw('price > ?', [4]);
        // $rs = $rs->whereRaw('price < ?', [9]);
        // $rs->havingRaw('price < 9', [9]);
        // $rs->offset(2);

        // $rs->limit(2);
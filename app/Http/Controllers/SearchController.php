<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function index(Request $request)
    {
        $categories =  $request->query('categories');
        // return $categories;
        $price_starts  = $request->query('price_starts');
        $end_price = $request->query('end_price');
        $keyword = $request->query('keyword');
        $page = $request->query('page');
        $limit = $request->query('limit');
        $orderBy =  $request->query('orderBy');
        $dimension =  $request->query('dimension');

        if (!isset($offset)) {
            $offset  = 0;
        }

        if (!isset($limit)) {
            $limit = 8;
        }

        $rs = Product::whereRaw(" bodau(products.name) like bodau(?)", ["%{$request->query('keyword')}%"]);


        if (isset($categories)) {
            $rs->whereIn('category_id', $categories);
        }

        // $rs->selectRaw('*','(select)');
        // $rs->selectRaw('sum(sum_sold.total_quantity) as price_with_tax', []);
        // sumSold

        // return isset($keyword);
        // $rs->selectRaw('*, products.id as product_id');
        if (isset($orderBy) && $orderBy == 'sold') {
            $rs->join('cart_items', 'products.id', '=', 'cart_items.product_id', 'left outer');
            $rs->select('products.*', DB::raw('COALESCE(SUM(quantity),0) as total_sales'))->groupBy('products.id');

            // // $rs->join('categories', 'products.category_id', '=', 'categories.id');

            // $rs = $rs->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $rs->orderBy(DB::raw('COALESCE(SUM(quantity),0)'), 'desc');
        }
        $pages = ceil($rs->count() / $limit);


        $rs->offset(($page - 1) * $limit);
        $rs->limit($limit);
        $rs = $rs->get();


        return ['products' => $rs, 'pages' => $pages];
    }
}







        // $rs = $rs->whereRaw('price > ?', [4]);
        // $rs = $rs->whereRaw('price < ?', [9]);
        // $rs->havingRaw('price < 9', [9]);
        // $rs->offset(2);

        // $rs->limit(2);
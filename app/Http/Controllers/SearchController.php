<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function index(Request $request)
    {
        $rs = Product::whereRaw(" bodau(name) like bodau('%{$request->query('keyword')}%')", []);
        $rs = $rs->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $rs = $rs->whereRaw('price > ?', [4]);
        $rs = $rs->whereRaw('price < ?', [9]);

        $rs = $rs->get();

        // $temp2 =  DB::select("select id from products where bodau(name) like bodau('%{$request->query('keyword')}%')");

        // $temp = [];
        // foreach ($temp2 as $row) {
        //     array_push($temp, $row->id);
        // }

        // $rs = Product::all()->whereIn('id', $rs);
        // $rs = $rs->where('id', '<', 10);
        // $rs = $rs->where('price',  '>', 4);
        // $rs->get();
        return $rs;
        // return new array($r);
    }
}

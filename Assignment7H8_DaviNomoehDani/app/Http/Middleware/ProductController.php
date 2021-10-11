<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * @param Illuminate\Http\Request $request
     * @link http://127.0.0.1:8000/products?price=100000
     * @link http://127.0.0.1:8000/products?name=kiehn&price=100000
     * @link http://127.0.0.1:8000/products
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $wheres = [];
        if ($request->get('name')){
            array_push($wheres, "`name` LIKE '%{$request->name}%'");
            // %123 ==> <any>...123
            // 123% ==> 123...<any>
            // %123% ==> <any>...123...<any>
        }
        if ($request->get('price')){
            array_push($wheres, "`price` LIKE '%{$request->price}%'");
        }

        // dd($wheres);

        if (count($wheres) > 0) {
            $whereQuery = " WHERE " . join(' AND ', $wheres);
        }
        else {
            $whereQuery = '';
        }
        
        // dd($whereQuery);

        $products = DB::select("SELECT * FROM `products`{$whereQuery}");

        return response()
            ->json([
                'status' => 'ok',
                'total' => count($products),
                'query' => $request->all(),
                'items' => $products
            ]);
    }




    // public function index(Request $request)
    // {
    //     $model = DB::table('products');

    //     if ($request->has('name')) {
    //         $model = $model->whereRaw("name LIKE '%{$request->name}%'");
    //     }
    //     if ($request->has('price')) {
    //         $model = $model->whereRaw("price LIKE '%{$request->price}%'");
    //     }

    //     $products = $model->get();

    //     return response()
    //         ->json([
    //             'status' => 'ok',
    //             'total' => count($products),
    //             'items' => $products
    //         ]);
    // }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    protected $products;

    public function __construct(ProductRepository $products)
    {
//      $this->middleware('auth');

        $this->products = $products;
    }

    public function index()
    {
        return response()->json([
            'data' => Product::all()
        ]);

//            ->setStatusCode(200, 'You got all the products!');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        return response()->json([
            'data' => $product
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{

    protected $categories;

    public function __construct(CategoryRepository $categories)
    {
//      $this->middleware('auth');

        $this->categories = $categories;
    }


    public function index()
    {
        return response()->json([
            'data' => Category::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Category $category)
    {
        return response()->json([
            'data' => $category
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

<?php

namespace App\Http\Controllers;

use App\Repositories\SubcategoryRepository;
use App\Subcategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubcategoryController extends Controller
{
    protected $subcategories;

    public function __construct(SubcategoryRepository $subcategories)
    {
//      $this->middleware('auth');

        $this->subcategories = $subcategories;
    }


    public function index()
    {
        return response()->json([
            'data' => Subcategory::all()
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


    public function show(Subcategory $subcategory)
    {
        return response()->json([
            'data' => $subcategory
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

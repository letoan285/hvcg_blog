<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::paginate(3);

        // return response()->json($categories);

    	return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
    	$categories = Category::all();
    	return view('admin.categories.create', compact('categories'));
    }


    public function store(Request $request)
    {
    	$categories = new Category();

    	$categories->name = $request->name;
    	$categories->parent_id = $request->parent_id;
    	$categories->status = $request->status;

    	$categories->save();
    	
    	return redirect()->route('categories.index');
    }
}

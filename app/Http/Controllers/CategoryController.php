<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategorysRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categorys = Category::all();
        return view('category.index',compact('categorys'));
    }

    public function create(Request $request)
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('name','id')->all();
        return view('category.create',compact('categories','allCategories'));
    }

    public function store(StoreCategorysRequest $request)
    {
        $id = $request -> input('parent_id');
        $request['parent_id'] = $id;
        $request['created_at'] = date("Y-m-d H:i:s",time());
        $request['updated_at'] = $request['created_at'];

        $customer = Category::create($request->all());

        return redirect()->route('categorys.index');
    }
}

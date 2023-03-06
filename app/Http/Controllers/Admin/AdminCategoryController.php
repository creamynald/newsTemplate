<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function show(){
        $categories = Category::orderBy('category_order', 'asc')->get();
        return view('admin.category.show', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->show_on_menu = $request->show_on_menu;
        $category->category_order = $request->category_order;
        $category->save();

        return redirect()->route('admin_category_show')->with('success', 'Category created successfully');
    }

    public function edit($id){
        $category_single = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('category_single'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',
        ]);

        $category = Category::where('id', $id)->first();
        $category->category_name = $request->category_name;
        $category->show_on_menu = $request->show_on_menu;
        $category->category_order = $request->category_order;
        $category->save();

        return redirect()->route('admin_category_show')->with('success', 'Category updated successfully');
    }

    public function delete($id){
        $category_single = Category::where('id', $id)->first();
        $category_single->delete();

        return redirect()->route('admin_category_show')->with('success', 'Category deleted successfully');
    }
}

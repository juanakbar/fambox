<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view("categories.index", [
            "categories" => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);

        Category::create([
            "name" => ($name = $request->name),
            "slug" => Str::slug($name) . "-" . Str::random(5),
            "status" => "product",
        ]);
        flash()->addSuccess("Category created successfully");
        return redirect()->route("categories.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            "name" => "required",
        ]);

        $category->update([
            "name" => ($name = $request->name),
        ]);
        flash()->addSuccess("Category updated successfully");
        return redirect()->route("categories.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        flash()->addSuccess("Category deleted successfully");
        return redirect()->route("categories.index");
    }
}

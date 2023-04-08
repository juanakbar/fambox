<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("products.index", [
            "products" => Product::latest()->paginate(10),
            "categories" => Category::where("status", "product")->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            "name" => "required",
            "price" => "required|numeric",
            "description" => "required",
            "category_id" => "required",
            "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "satuan" => "required",
        ]);
        $validateData["slug"] = Str::slug(
            $request->name . "-" . Str::random(10)
        );
        $validateData["user_id"] = Auth::user()->id;
        if ($request->file("image")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData["image"] = $request
                ->file("image")
                ->store("product-images");
        }

        $product->update($validateData);
        return redirect()
            ->route("products.index")
            ->with("success", "Product updated successfully.");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required",
            "price" => "required|numeric",
            "description" => "required",
            "category_id" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "satuan" => "required",
        ]);
        $validateData["slug"] = Str::slug(
            $request->name . "-" . Str::random(10)
        );
        $validateData["user_id"] = Auth::user()->id;
        if ($request->file("image")) {
            $validateData["image"] = $request
                ->file("image")
                ->store("product-images");
        }

        Product::create($validateData);
        return redirect()
            ->route("products.index")
            ->with("success", "Product created successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()
            ->route("products.index")
            ->with("success", "Product deleted successfully.");
    }
}

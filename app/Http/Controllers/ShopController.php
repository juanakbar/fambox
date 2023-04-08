<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("shops.index", [
            "products" => Product::latest()->paginate(10),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("shops.show", [
            "product" => $product,
        ]);
    }

    /**
     * Add to cart
     */

    public function addToCart(Product $product)
    {
        $cart = session()->get("cart");

        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $product->id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo,
                ],
            ];

            session()->put("cart", $cart);

            return redirect()
                ->back()
                ->with("success", "Product added to cart successfully!");
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$product->id])) {
            $cart[$product->id]["quantity"]++;

            session()->put("cart", $cart);

            return redirect()
                ->back()
                ->with("success", "Product added to cart successfully!");
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$product->id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
        ];

        session()->put("cart", $cart);

        return redirect()
            ->back()
            ->with("success", "Product added to cart successfully!");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where("user_id", auth()->user()->id)
            ->where("is_checkout", false)
            ->get();
        //        Get total price where product checkout is false
        $totalPrice = $carts->sum(function ($cart) {
            return $cart->total_price;
        });
        // get nominal discount from total price
        $discount = $totalPrice * 0.1;

        return view("carts.index", [
            "carts" => $carts,
            "totalPrice" => $totalPrice,
            "discount" => $discount,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = Cart::where("user_id", auth()->user()->id)
            ->where("product_id", $request->product_id)
            ->where("is_checkout", false)
            ->first();

        if ($cart) {
            $cart->update([
                "quantity" => $cart->quantity + $request->quantity,
            ]);
        } else {
            Cart::create([
                "user_id" => auth()->user()->id,
                "product_id" => $request->product_id,
                "quantity" => $request->quantity,
            ]);
        }

        return redirect()
            ->route("cart.index")
            ->with("success", "Product added to cart successfully!");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()
            ->route("cart.index")
            ->with("success", "Product deleted from cart successfully!");
    }
}

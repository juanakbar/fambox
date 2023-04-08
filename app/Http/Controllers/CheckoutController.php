<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //        get checkout by slug from link and user_id
        $checkout = Checkout::where("slug", request()->slug)
            ->where("user_id", auth()->user()->id)
            ->firstOrFail();
        dd($checkout);
        //        get total price from checkout
        $totalPrice = $checkout->total_price;
        //        get nominal discount from total price
        $discount = $totalPrice * 0.1;

        return view("checkouts.index", [
            "checkout" => $checkout,
            "totalPrice" => $totalPrice,
            "discount" => $discount,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carts = Cart::where("user_id", auth()->user()->id)
            ->where("is_checkout", false)
            ->get();

        $checkout = Checkout::create([
            "user_id" => auth()->user()->id,
            "cart_ids" => $carts->pluck("id"),
            "slug" => "checkout-" . auth()->user()->id . "-" . now()->timestamp,
        ]);
        // After save checkout, pluck product_ids and update is_checkout to true
        $carts->pluck("product_id")->each(function ($productId) {
            Cart::where("product_id", $productId)
                ->where("user_id", auth()->user()->id)
                ->update([
                    "is_checkout" => true,
                ]);
        });

        return redirect()
            ->route("checkout.index", $checkout->slug)
            ->with("success", "Checkout success!");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        $cart_id = json_decode($checkout->cart_ids);
        $carts = Cart::whereIn("id", $cart_id)->get();
        //        $products = $cart->map(function ($cart) {
        //            return $cart->product;
        //        });

        $totalPriceProduct = $carts->sum(function ($cart) {
            return $cart->total_price;
        });

        //        Discount 10% from total price
        $discount = $totalPriceProduct * 0.1;

        return view("checkouts.show", [
            "carts" => $carts,
            "totalPriceProduct" => $totalPriceProduct,
            "discount" => $discount,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}

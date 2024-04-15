<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller {

    public function index(): Response {
        $user = Auth::user();
        $cart = Cart::firstOrNew(['user_id' => $user->id]);

        $productIds = array_keys($cart->items);

        $products = Product::whereIn('id', $productIds)->get();

        $productInfo = $products->keyBy('id');

        $cartItems = [];
        foreach ($cart->items as $productId => $quantity) {
            $product = $productInfo[$productId];
            $cartItems[] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }

        return Inertia::render('Cart/Index', ['cart' => $cartItems]);
    }

    public function add(Request $request): RedirectResponse {
        // TODO: 驗證 $request->id $request->quantity
        $user = Auth::user();
        $cart = Cart::firstOrNew(['user_id' => $user->id]);

        $items = $cart->items;
        $items[$request->id] = ($items[$request->id] ?? 0) + $request->quantity;
        $cart->items = $items;
        $cart->save();

        return redirect()->back()->with('success', '商品已成功添加到購物車！');
    }

    public function update(Request $request): RedirectResponse {
        // TODO: 驗證 $request->items
        $user = Auth::user();
        $cart = Cart::firstOrNew(['user_id' => $user->id]);

        $cart->items = $request->items;
        $cart->save();

        return Redirect::route('cart.index');
    }
}

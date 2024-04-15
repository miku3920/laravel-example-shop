<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller {

    public function index(): Response {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        return Inertia::render('Cart/Index', [
            'cartItems' => $cartItems,
        ]);
    }
}

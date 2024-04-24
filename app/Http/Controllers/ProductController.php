<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductController extends Controller {

    public function category(string $category = '', string $sub_category = ''): View {
        $routes = Product::routes($category);
        $where = Product::categoryToWhere($category, $sub_category) ?? abort(404);

        $products = Product::where($where)->paginate(20);

        return view('products.index', compact('routes', 'category', 'products'));
    }

    public function index(Request $request): View {
        $q = $request->input('q');

        $products = Product::where('name', 'like', "%{$q}%")
            ->orWhere('sub_name', 'like', "%{$q}%")
            ->orWhere('specification', 'like', "%{$q}%")
            ->paginate(20);

        return view('products.index', compact('products', 'q'));
    }

    public function show(int $id, string $url_slug = ''): View|RedirectResponse {
        $product = Product::findOrFail($id);

        $product_slug = Str::slug($product->name, '-', null);

        if ($product_slug !== $url_slug) {
            return Redirect::route(
                'products.show',
                ['id' => $product->id, 'slug' => $product_slug],
                301
            );
        }

        return view('products.show', compact('product'));
    }
}

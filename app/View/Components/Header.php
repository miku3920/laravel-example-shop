<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;
use Illuminate\View\View;

class Header extends Component {

    public function render(): View {
        $routes = Product::routes();

        return view('components.header', compact('routes'));
    }
}

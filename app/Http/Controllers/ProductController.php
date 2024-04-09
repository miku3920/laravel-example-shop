<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {

    public function show(string $category): string {
        return $category;
    }
}

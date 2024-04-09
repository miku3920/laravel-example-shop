<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index(string $category, string $sub_category = ''): View {
        $where = [
            // 配件
            'accessories' => [
                '' => [
                    ['category', 1],
                ],
                // 地台
                'platform' => [
                    ['category', 1],
                    ['sub_category', 1],
                ],
                // 特效件
                'special-effects' => [
                    ['category', 1],
                    ['sub_category', 1],
                ],
            ],
            // 金屬貼
            'metal-stickers' => [
                '' => [
                    ['category', 2],
                ],
                // 鋼彈
                'gundam' => [
                    ['category', 2],
                    ['sub_category', 1],
                ],
                // 暴雪
                'blizzard' => [
                    ['category', 2],
                    ['sub_category', 2],
                ],
                // 動漫
                'anime' => [
                    ['category', 2],
                    ['sub_category', 3],
                ],
            ],
            // 工具及周邊商品
            'tools-peripherals' => [
                '' => [
                    ['category', 3],
                ],
                // 工具
                'tools' => [
                    ['category', 3],
                    ['sub_category', 1],
                ],
                // 周邊
                'peripherals' => [
                    ['category', 3],
                    ['sub_category', 2],
                ],
            ],
        ][$category][$sub_category] ?? abort(404);

        $products = Product::where($where)->paginate(20);

        return view('products', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}

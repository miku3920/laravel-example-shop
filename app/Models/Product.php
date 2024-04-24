<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    /**
     * @return ?array<array<string|int>>
     */
    public static function categoryToWhere(string $category = '', string $sub_category = ''): ?array {
        return [
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
        ][$category][$sub_category] ?? null;
    }

    /**
     * @return array<string>
     */
    public static function routes(string $category = ''): array {
        return [
            // 配件
            'accessories' => [
                '地台' => route('products.category', [
                    'category' => 'accessories',
                    'sub_category' => 'platform',
                ]),
                '特效件' => route('products.category', [
                    'category' => 'accessories',
                    'sub_category' => 'special-effects',
                ]),
            ],
            // 金屬貼
            'metal-stickers' => [
                '鋼彈' => route('products.category', [
                    'category' => 'metal-stickers',
                    'sub_category' => 'gundam',
                ]),
                '暴雪' => route('products.category', [
                    'category' => 'metal-stickers',
                    'sub_category' => 'blizzard',
                ]),
                '動漫' => route('products.category', [
                    'category' => 'metal-stickers',
                    'sub_category' => 'anime',
                ]),
            ],
            // 工具及周邊商品
            'tools-peripherals' => [
                '工具' => route('products.category', [
                    'category' => 'tools-peripherals',
                    'sub_category' => 'tools',
                ]),
                '周邊' => route('products.category', [
                    'category' => 'tools-peripherals',
                    'sub_category' => 'peripherals',
                ]),
            ],
        ][$category] ?? [
            '首頁' => route('home'),
            '金屬貼' => route('products.category', ['category' => 'metal-stickers']),
            '地台' => route('products.category', [
                'category' => 'accessories',
                'sub_category' => 'platform',
            ]),
            '特效件' => route('products.category', [
                'category' => 'accessories',
                'sub_category' => 'special-effects',
            ]),
            '工具及周邊' => route('products.category', ['category' => 'tools-peripherals']),
            '聯絡我們' => route('contact-us'),
        ];
    }
}

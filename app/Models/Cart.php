<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
    use HasFactory;

    /**
     * 可以被批量賦值的欄位。
     *
     * @var array
     */
    protected $fillable = ['user_id', 'product_id', 'quantity'];

    /**
     * 模型的日期欄位的存儲格式。
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * 購物車資料表的欄位說明。
     *
     * @var array
     */
    protected $attributes = [
        'user_id' => '使用者ID',
        'product_id' => '商品ID',
        'quantity' => '數量',
    ];
}

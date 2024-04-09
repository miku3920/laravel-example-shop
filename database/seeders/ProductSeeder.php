<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use SplFileObject;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     */
    public function run(): void {
        // 設定 CSV 檔案路徑
        $csvFile = storage_path('app/imports/products.csv');

        // 使用 SplFileObject 來讀取 CSV 檔案
        $file = new SplFileObject($csvFile, 'r');
        $file->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);

        $data = [];
        // 逐行處理 CSV 檔案中的資料
        foreach ($file as $row) {
            if (isset($row[0])) {
                $data[] = [
                    'category' => [
                        '' => 0,
                        '配件' => 1,
                        '金屬貼' => 2,
                        '工具及周邊商品' => 3,
                    ][trim($row[1])] ?? dd($row[1]),
                    'sub_category' => [
                        '' => 0,
                        // 配件
                        '地台' => 1,
                        '特效件' => 2,
                        // 金屬貼
                        '鋼彈' => 1,
                        '暴雪' => 2,
                        '動漫' => 3,
                        // 工具及周邊商品
                        '工具' => 1,
                        '周邊' => 2,
                    ][trim($row[2])] ?? dd($row[2]),
                    'sku' => trim($row[3]),
                    'name' => trim($row[4]),
                    'sub_name' => trim($row[5]),
                    'specification' => trim($row[6]),
                    'price' => trim($row[7]),
                ];
            }
        }

        Product::insert($data);
    }
}

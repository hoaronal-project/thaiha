<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ($this->present()) {
            return;
        }

        collect([
            'TỐC ĐỘ CAO',
            'TẢI KHÁCH',
            'TẢI BĂNG CA',
            'TẢI HÀNG',
            'LỒNG KÍNH',
            'GIA ĐÌNH',
            'THANG CUỐN/THANG BĂNG TẢI BỘ',
        ])->each(fn ($category) => Category::create([
            'name' => $category,
        ]));
    }

    protected function present()
    {
        return DB::table('categories')->exists();
    }
}

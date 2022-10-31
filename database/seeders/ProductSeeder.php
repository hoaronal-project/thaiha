<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            'Hitachi Homelift Deluxe 200kg',
            'Hitachi Homelift Deluxe 200kg',
        ])->each(fn ($name) => Product::create([
            'category_id' => 1,
            'name' => $name,
            'description' => 'Lorem ipsum',
        ]));
    }

    protected function present()
    {
        return DB::table('products')->exists();
    }
}

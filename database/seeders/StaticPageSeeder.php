<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticPageSeeder extends Seeder
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
            'Giới thiệu',
            'Hỗ trợ',
            'Khách hàng',
            'Dịch vụ',
        ])->each(fn ($title) => StaticPage::create([
            'title' => $title,
            'body' => 'Lorem ipsum',
        ]));
    }

    protected function present()
    {
        return DB::table('static_pages')->exists();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
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
            'Vinhomes Central Park',
            'Vinhomes Skylake Pham Hung',
            'The Garden Hill',
            'T14 TIMES CITY – HANOI',
            '152 DIEN BIEN PHU',
            'DREAM HOME PALACE',
        ])->each(fn ($title) => Article::create([
            'title' => $title,
            'excerpt' => 'Location: Ho Chi Minh City<br />Owner: Vingroup<br />Scale: 52 floors<br />Volume: 30 elevators',
            'body' => 'Lorem ipsum',
        ]));
    }

    protected function present()
    {
        return DB::table('articles')->exists();
    }
}

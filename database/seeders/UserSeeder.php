<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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

        User::create([
            'name' => 'Admin',
            'email' => 'admin@thaihagroup.com.vn',
            'password' => bcrypt('secret'),
            'is_admin' => true,
        ]);
    }

    protected function present()
    {
        return DB::table('users')->exists();
    }
}

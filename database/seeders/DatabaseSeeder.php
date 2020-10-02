<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'vcshoang',
            'password'=>bcrypt('1'),
            'fullname'=>'Phạm Hoàng',
            'email'=>'phamhoanghxh1@gmail.com',
            'phone'=>'0339362666',
        ]);
    }
}

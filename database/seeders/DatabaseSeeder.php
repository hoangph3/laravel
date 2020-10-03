<?php

namespace Database\Seeders;

use Carbon\Traits\Timestamp;
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
        DB::table('messages')->insert([
            'sender'=>'aaa',
            'receiver'=>'vcsadmin',
            'content'=>'hehe',
            'time'=>now(),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'content' => Str::random(10),
        ]);
        DB::table('messages')->insert([
            'content' => Str::random(10),
        ]);
        DB::table('messages')->insert([
            'content' => Str::random(10),
        ]);
        DB::table('messages')->insert([
            'content' => Str::random(10),
        ]);
    }
}

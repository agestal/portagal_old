<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Adrián',
            'email' => 'agestal@arnoia.com',
            'password' => bcrypt('portagal'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jacobo',
            'email' => 'jacobo@codematic.com',
            'password' => bcrypt('portagal'),
        ]);
    }
}

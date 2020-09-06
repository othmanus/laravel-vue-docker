<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('roles')->count() === 0) {
            DB::table('roles')->insert([
                ['id' => 1, 'name' => 'user'],
                ['id' => 2, 'name' => 'admin'],
            ]);
        }
    }
}

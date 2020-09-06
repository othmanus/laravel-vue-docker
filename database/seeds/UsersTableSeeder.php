<?php

use App\Models\User\Customer;
use App\Models\User\Driver;
use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('users')->find(config('admin.root_admin.id'))) {
            $now = Carbon::now();
            // Admin
            DB::table('users')->insert([
                [
                    'id' => config('admin.root_admin.id'),
                    'role_id' => config('role.admin_id'),
                    'email' => config('admin.root_admin.email'),
                    'name' => config('admin.root_admin.name'),
                    'password' => Hash::make(config('admin.root_admin.password')),
                    'email_verified_at' => $now,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'role' => UserRole::SHOP_MANAGER,
            'password' => 'admin',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $admin->save();
        
        User::factory()
            ->count(50)
            ->create();
    }
}

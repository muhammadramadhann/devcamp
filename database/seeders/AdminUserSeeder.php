<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@codecamp@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => Hash::make('12345'),
            'is_admin' => true
        ]);
    }
}

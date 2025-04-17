<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_info = [
            'name' => env('ADMIN_NAME'),
            'handle' => env('ADMIN_HANDLE'),
            'pronouns' => env('ADMIN_PRONOUNS'),
            'email' => env('ADMIN_EMAIL'),
            'password' => env('ADMIN_PASSWORD'),
        ];

        $user = User::where('email', $admin_info['email'])->first();
        if ($user) {
            $user->update([
                'name' => $admin_info['name'],
                'handle' => $admin_info['handle'],
                'pronouns' => $admin_info['pronouns'],
                'password' => bcrypt($admin_info['password']),
            ]);
            return;
        }

        User::create([
            'name' => $admin_info['name'],
            'handle' => $admin_info['handle'],
            'pronouns' => $admin_info['pronouns'],
            'email' => $admin_info['email'],
            'password' => bcrypt($admin_info['password']),
            'is_admin' => true,
        ]);
    }
}

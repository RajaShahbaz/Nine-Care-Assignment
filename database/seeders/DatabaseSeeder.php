<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => 'User '.$i,
                'email' => 'user'.$i.'@example.com',
                'password' => bcrypt('password'),
                'phone' => '555-555-5555',
                'addres' => 'user-address',

            ]);

            for ($j = 0; $j < 10; $j++) {
                Order::create([
                    'user_id' => $user->id,
                    'Order_number' => '#000 '.$j,
                ]);
            }
        }
    }
}

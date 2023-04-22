<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'password' => bcrypt('password'),
                'phone'=>'111-111-1111',
                'addres'=>'123 Main St, Anytown, CA 12345',
                'age' => 25,
                'location' => 'New York',
                'gender' => 'female',
            ],
            [
                'name' => 'Bob',
                'email' => 'bob@example.com',
                'password' => bcrypt('password'),
                'phone'=>'555-555-5555',
                'addres'=>'789 Oak Ave, Bigtown, TX 12345',
                'age' => 35,
                'location' => 'Los Angeles',
                'gender' => 'male',
            ],
            [
                'name' => 'Carol',
                'email' => 'carol@example.com',
                'password' => bcrypt('password'),
                'phone'=>'222-222-2222',
                'addres'=>'456 Elm St, Smallville, NY 67890',
                'age' => 28,
                'location' => 'Chicago',
                'gender' => 'female',
            ],
            // Add more users as needed...
        ]);

            // for ($j = 0; $j < 10; $j++) {
            //     Order::create([
            //         'user_id' => rand(1,3),
            //         'Order_number' => '#000 '.$j,
            //     ]);
            // }
        }
    }

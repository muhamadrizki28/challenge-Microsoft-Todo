<?php

namespace Database\Seeders;

use App\Models\User; //baru untuk model
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //baru
use Illuminate\Support\Facades\Hash; //baru
use Illuminate\Support\Str; //baru

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
         [
             'name' => 'Rizki',
             'email' => 'rizki@gmail.com',
             'password' => bcrypt('123456'),
             'created_at' => new \DateTime,
             'updated_at' => null,
         ],
         [
             'name' => 'Joy',
             'email' => 'joy@gmail.com',
             'password' => bcrypt('123456'),
             'created_at' => new \DateTime,
             'updated_at' => null,
         ],
         
         ];
         


         \DB::table('users')->insert($users);

    }
}

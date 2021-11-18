<?php

namespace Database\Seeders;

use App\Models\User; //baru untuk model
use Illuminate\Database\Seeder;

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
             'password' => Hash::make('contoh123'),
             'created_at' => new \DateTime,
             'updated_at' => null,
         ],
         [
             'name' => 'Joy',
             'email' => 'joy@gmail.com',
             'password' => Hash::make('cjoy123'),
             'created_at' => new \DateTime,
             'updated_at' => null,
         ],
         
         ];

         \DB::table('users')->insert($users);

    }
}

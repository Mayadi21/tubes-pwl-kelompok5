<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [   'id' => 1,
                'name'=>'Mas admin',
                'email'=>'petrakeliat01@sma.belajar.id',
                'role'=>'admin',
                'password'=>bcrypt('admin12345')
            ]
            ];

            foreach($userData as $key => $val){
                User::create($val);
            }
    }
}
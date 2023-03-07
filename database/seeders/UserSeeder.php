<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'name'          => 'Admin',
                'username'      => 'admin',
                'email'         => 'admin@gmail.com',
                'password'      => Hash::make("1234"),
                'role'          => 1
            ),
            array(
                'name'          => 'Member',
                'username'      => 'member',
                'email'         => 'member@gmail.com',
                'password'      => Hash::make("1234"),
                'role'          => 2
            ),
            array(
                'name'          => 'Pengunjung',
                'username'      => 'pengunjung',
                'email'         => 'pengunjung@gmail.com',
                'password'      => Hash::make("1234"),
                'role'          => 3
            ),
        ));
    }
}

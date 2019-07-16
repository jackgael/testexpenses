<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$1YSUwMRWXYQPObZTxyd0SuGtEYW1IKmBFPYoerE6tovvUHirzIUW6',
            'remember_token' => null,
            'created_at'     => '2019-07-16 15:07:53',
            'updated_at'     => '2019-07-16 15:07:53',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}

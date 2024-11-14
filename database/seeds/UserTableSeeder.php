<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@dit.com',
            'password' => Hash::make('admin'),
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


        $this->command->info('Users table seeded!');

        $user1 =  \App\Models\User::find(1);//assuming the inserted user has id = 1

        $user1->assignRole('Admin');


        $this->command->info('User was assigned Admin role');
    }
}

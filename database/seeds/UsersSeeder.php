<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

                [
                    'name' => 'isa',
                    'email' => 'isa@example.com',
                    'password' => bcrypt('isaisa'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'hengki',
                    'email' => 'hengki@example.com',
                    'password' => bcrypt('hengkihengki'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(App\User::class)->create([
            'name'=>'Pelrock',
            'username' => 'pelrock',
            'email'=>'pelrock@pelrock.com',
            'role'=>'admin',
            'password'=>bcrypt('almasa'),
            'active'=> true
        ]);
        factory(App\User::class, 10)->create();
        factory(App\User::class)->create([
                'name'=>'pelrock',
                'role'=>'admin'
            ]
            
        );
    }
}

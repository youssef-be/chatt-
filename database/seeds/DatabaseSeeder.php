<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

          $user =  \App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin'),
            
        ]);

  


    $user1 =  \App\User::create([
            'name' => 'test2',
            'email' => 'test@admin.fr',
            'password' => bcrypt('admin'),
           
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Gilang Wahyudi',
                'email' => 'ondozwahyudi@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oZEJih2O5qDCvEPew.azxeVTjqo/R8oifnUVwM.knaZ3cWJUWN1XO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-07-22 11:04:35',
                'updated_at' => '2021-07-22 11:04:35',
            ),
        ));
        
        
    }
}
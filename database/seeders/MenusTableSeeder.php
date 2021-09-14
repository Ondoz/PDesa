<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'main',
                'created_at' => '2021-07-22 11:13:40',
                'updated_at' => '2021-07-22 11:13:40',
            ),
        ));
        
        
    }
}
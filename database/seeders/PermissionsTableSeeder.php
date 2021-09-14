<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-07-22 11:02:33',
                'updated_at' => '2021-07-22 11:02:33',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-22 11:06:00',
                'updated_at' => '2021-07-22 11:06:00',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-22 11:06:00',
                'updated_at' => '2021-07-22 11:06:00',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-22 11:06:00',
                'updated_at' => '2021-07-22 11:06:00',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-22 11:06:00',
                'updated_at' => '2021-07-22 11:06:00',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-07-22 11:06:00',
                'updated_at' => '2021-07-22 11:06:00',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-07-22 11:06:01',
                'updated_at' => '2021-07-22 11:06:01',
            ),
        ));
        
        
    }
}
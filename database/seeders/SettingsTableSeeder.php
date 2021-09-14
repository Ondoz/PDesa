<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site Description',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/July2021/OICpctx2R4jThhBe6ElI.png',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Desa',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Desa',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 12,
                'key' => 'general.nama',
                'display_name' => 'Nama Lurah',
                'value' => 'DRS. H. DAMANHURI, MBA., MM.',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'General',
            ),
            11 => 
            array (
                'id' => 13,
                'key' => 'general.description',
                'display_name' => 'Description Lurah',
                'value' => 'The Highest Glory of the Citizen’s Revolution was this: it connected in one indissoluble bond the principles of Civil Government with the pronciples of Humanity',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 7,
                'group' => 'General',
            ),
            12 => 
            array (
                'id' => 14,
                'key' => 'general.image_lurah',
                'display_name' => 'Image Lurah',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'General',
            ),
            13 => 
            array (
                'id' => 20,
                'key' => 'visi-dan-misi.visi',
                'display_name' => 'Visi',
                'value' => '“ Mempertahankan Pemerintah Kalurahan yang kuat dan masyarakat yang maju melalui peningkatan kinerja Pemerintahan Kalurahan yang bersih dan bertanggungjawab, peningkatan system pelayanan umum, pembangunan yang berkesinambungan dan berkeadilan berlandaskan potensi dan budaya “',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 10,
                'group' => 'Visi dan Misi',
            ),
            14 => 
            array (
                'id' => 21,
                'key' => 'contact-us.address',
                'display_name' => 'Alamat',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Contact Us',
            ),
        ));
        
        
    }
}
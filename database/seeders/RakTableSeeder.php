<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RakTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rak')->delete();
        
        \DB::table('rak')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rak' => '0',
                'baris' => '0',
                'slug' => '0',
                'kategori_id' => 1,
                'created_at' => '2023-01-05 22:26:29',
                'updated_at' => '2023-01-05 22:26:29',
            ),
            1 => 
            array (
                'id' => 2,
                'rak' => '1',
                'baris' => '2',
                'slug' => '1-2',
                'kategori_id' => 2,
                'created_at' => '2023-01-05 22:28:57',
                'updated_at' => '2023-01-05 22:28:57',
            ),
        ));
        
        
    }
}
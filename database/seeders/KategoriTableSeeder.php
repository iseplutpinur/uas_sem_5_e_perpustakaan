<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori')->delete();
        
        \DB::table('kategori')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'None',
                'slug' => 'none',
                'created_at' => '2023-01-05 22:26:29',
                'updated_at' => '2023-01-05 22:26:29',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Kategori A',
                'slug' => 'kategori-a',
                'created_at' => '2023-01-05 22:28:41',
                'updated_at' => '2023-01-05 22:28:41',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenerbitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penerbit')->delete();
        
        \DB::table('penerbit')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'None',
                'slug' => 'none',
                'created_at' => '2023-01-05 22:26:30',
                'updated_at' => '2023-01-05 22:26:30',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Penerbit A',
                'slug' => 'penerbit-a',
                'created_at' => '2023-01-05 22:29:08',
                'updated_at' => '2023-01-05 22:29:08',
            ),
        ));
        
        
    }
}
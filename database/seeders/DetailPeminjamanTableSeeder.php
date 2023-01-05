<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailPeminjamanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detail_peminjaman')->delete();
        
        \DB::table('detail_peminjaman')->insert(array (
            0 => 
            array (
                'id' => 1,
                'peminjaman_id' => 1,
                'buku_id' => 1,
                'created_at' => '2023-01-05 22:32:20',
                'updated_at' => '2023-01-05 22:32:20',
            ),
        ));
        
        
    }
}
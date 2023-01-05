<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeminjamanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peminjaman')->delete();
        
        \DB::table('peminjaman')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_pinjam' => '850621184',
                'peminjam_id' => 3,
                'petugas_pinjam' => 2,
                'petugas_kembali' => NULL,
                'status' => 2,
                'denda' => NULL,
                'tanggal_pinjam' => '2023-01-07',
                'tanggal_kembali' => '2023-01-14',
                'tanggal_pengembalian' => NULL,
                'created_at' => '2023-01-05 22:32:20',
                'updated_at' => '2023-01-05 22:33:42',
            ),
        ));
        
        
    }
}
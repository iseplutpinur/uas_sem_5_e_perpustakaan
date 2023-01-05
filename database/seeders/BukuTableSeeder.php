<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buku')->delete();
        
        \DB::table('buku')->insert(array (
            0 => 
            array (
                'id' => 1,
                'judul' => 'Buku A',
                'slug' => 'buku-a',
                'sampul' => 'buku/tF11lgp1N34Sa8QYjpwFUe8cIhttPcMdVkdScnoi.jpg',
                'penulis' => 'Penulis A',
                'penerbit_id' => 2,
                'kategori_id' => 2,
                'rak_id' => 2,
                'stok' => 19,
                'created_at' => '2023-01-05 22:29:41',
                'updated_at' => '2023-01-05 22:33:42',
            ),
        ));
        
        
    }
}
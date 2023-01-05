<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // php artisan iseed users,password_resets,failed_jobs,personal_access_tokens,kategori,rak,penerbit,buku,peminjaman,detail_peminjaman,sessions,posts --force
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(RakTableSeeder::class);
        $this->call(PenerbitTableSeeder::class);
        $this->call(BukuTableSeeder::class);
        $this->call(PeminjamanTableSeeder::class);
        $this->call(DetailPeminjamanTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}

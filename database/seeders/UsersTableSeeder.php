<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'jenis_kelamin' => 'none',
                'jurusan' => 'none',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2023-01-05 22:26:29',
                'password' => '$2y$10$v4ty1OMvK2bWslUGkjjK3uEPVwHqTWaOaYfIVpVu8bjkhGpw26oym',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-01-05 22:26:29',
                'updated_at' => '2023-01-05 22:26:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Petugas',
                'jenis_kelamin' => 'Pria',
                'jurusan' => 'Teknik Informatika',
                'email' => 'petugas@gmail.com',
                'email_verified_at' => '2023-01-05 22:26:29',
                'password' => '$2y$10$ENIHxh3WY/h4EU3byeuGeO5hYSn0ifNBKiww3OtWI.3Uad8IyPWeq',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-01-05 22:26:29',
                'updated_at' => '2023-01-05 22:26:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Peminjam',
                'jenis_kelamin' => 'Wanita',
                'jurusan' => 'Ekonomi',
                'email' => 'peminjam@gmail.com',
                'email_verified_at' => '2023-01-05 22:26:29',
                'password' => '$2y$10$.Zir59kmGYN3j9/BYmsNvePU0fBIgCmYC0cfUMyowBLQyBt0bNL/m',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-01-05 22:26:29',
                'updated_at' => '2023-01-05 22:26:29',
            ),
        ));
        
        
    }
}
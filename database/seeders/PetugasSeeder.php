<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nama_petugas' => 'Rifgi Admin',
            'username' => 'adm_rifgi',
            'password' => Hash::make('password'),
            'telp' => '089624005433',
            'level' => 'administrator',
            'status' => true,
            'created_at' => now()
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => 'Rifgi Petugas',
            'username' => 'ptg_rifgi',
            'password' => Hash::make('password'),
            'telp' => '089614226228',
            'level' => 'petugas',
            'status' => true,
            'created_at' => now()
        ]);
    }
}

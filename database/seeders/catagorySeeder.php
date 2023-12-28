<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Seragam Merah',
            'foto_barang' => 'produk1.png',
            'rating'      => 0,
            'harga'       => 300000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Seragam Putih',
            'foto_barang' => 'produk2.png',
            'rating'      => 0,
            'harga'       => 300000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Baju Telkom',
            'foto_barang' => 'produk3.png',
            'rating'      => 0,
            'harga'       => 150000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Baju Telkom',
            'foto_barang' => 'produk4.png',
            'rating'      => 0,
            'harga'       => 150000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Baju Telkom',
            'foto_barang' => 'produk3.png',
            'rating'      => 0,
            'harga'       => 150000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 1,
            'nama_barang' => 'Seragam Merah',
            'foto_barang' => 'produk1.png',
            'rating'      => 0,
            'harga'       => 300000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 2,
            'nama_barang' => 'Tempat Pulpen',
            'foto_barang' => 'alattulis1.png',
            'rating'      => 0,
            'harga'       => 10000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 4,
            'nama_barang' => 'Alat Tulis',
            'foto_barang' => 'alattulis2.png',
            'rating'      => 0,
            'harga'       => 50000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 4,
            'nama_barang' => 'Alat Tulis',
            'foto_barang' => 'alattulis3.png',
            'rating'      => 0,
            'harga'       => 50000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 2,
            'nama_barang' => 'Tempat Pensil',
            'foto_barang' => 'alattulis4.png',
            'rating'      => 0,
            'harga'       => 30000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 3,
            'nama_barang' => 'Laptop Second',
            'foto_barang' => 'Laptop1.png',
            'rating'      => 0,
            'harga'       => 1500000,
        ]);

        DB::table('catagory')->insert([
            'catagori_id' => 3,
            'nama_barang' => 'Laptop Second',
            'foto_barang' => 'Laptop2.png',
            'rating'      => 0,
            'harga'       => 2000000,
        ]);



    }
}

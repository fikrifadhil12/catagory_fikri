<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipebarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catagory_barang')->insert([
            'nama_barang' => 'Tshirt',
            'foto_barang' => 'iconbaju.png',
            
        ]);
        DB::table('catagory_barang')->insert([
            'nama_barang' => 'Alat Tulis',
            'foto_barang' => 'pen.png',
            
        ]);

        DB::table('catagory_barang')->insert([
            'nama_barang' => 'Laptop',
            'foto_barang' => 'laptop.png',
            
        ]);

        DB::table('catagory_barang')->insert([
            'nama_barang' => 'Buku',
            'foto_barang' => 'book1.png',
            
        ]);
    }
}

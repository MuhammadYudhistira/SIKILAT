<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_kamar')->insert([
            'nama' => 'Gedung Tuah Sakato',
            'harga' => '75000'
        ]);

        DB::table('tipe_kamar')->insert([
            'nama' => 'Saiyo',
            'harga' => '75000'
        ]);

        DB::table('tipe_kamar')->insert([
            'nama' => 'Tuah Supakaik',
            'harga' => '75000'
        ]);
    }
}

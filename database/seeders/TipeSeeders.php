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
            'nama' => 'Standard',
            'harga' => '100000'
        ]);

        DB::table('tipe_kamar')->insert([
            'nama' => 'Deluxe',
            'harga' => '200000'
        ]);
    }
}

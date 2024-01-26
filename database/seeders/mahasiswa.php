<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim'=> "f1e122",
            'nama'=> "virda",
            'kelas'=> "r002",
            'des'=> "pemateri 1",
        ]);

        DB::table('mahasiswa')->insert([
            'nim'=> "f1e123",
            'nama'=> "ji",
            'kelas'=> "r001",
            'des'=> "pemateri 2",
        ]);

        DB::table('mahasiswa')->insert([
            'nim'=> "f1e165",
            'nama'=> "lea",
            'kelas'=> "r003",
            'des'=> "pemateri cadangan",
        ]);
    }
}

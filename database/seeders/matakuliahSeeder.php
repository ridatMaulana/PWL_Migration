<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $name = array("Pemrograman Web", "Pemrograman Desktop", "Pemrograman Mobile", "Sistem Informasi", "Jaringan Komputer",
        "Manajemen Keamanan Informasi", "Sistem Operasi", "Multimedia", "Interaksi Manusia & Komputer", "Pemrograman Berbasis Objek",
        "Basis Data", "Rekayasa Perangkat Lunak", "Komunikasi Data", "Strategi Algoritma", "Kalkulus");
        for ($i=0; $i < 15; $i++) { 
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => "IF-".rand(00000,99999),
                'nama_matakuliah' => $name[$i],
                'sks' => $faker->randomElement([1,2,3]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

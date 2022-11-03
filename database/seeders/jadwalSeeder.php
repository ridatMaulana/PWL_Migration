<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        $days = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at");
        for ($i=0; $i < 25; $i++) { 
            $mk = MataKuliah::inRandomOrder()->first();
            $dosen = Dosen::inRandomOrder()->first();
            DB::table('jadwal')->insert([
                'kode_matakuliah' => $mk->kode_matakuliah,
                'nidn' => $dosen->nidn,
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D']),
                'hari' => $faker->randomElement($days),
                'jam' => $faker->time($format = 'H:i:s'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

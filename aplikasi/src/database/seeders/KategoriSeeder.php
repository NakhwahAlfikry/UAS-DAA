<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Kategori;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Healthy Starter' => 'Pemula yang baru memulai gaya hidup sehat', 'Balanced Performer' => 'Sudah rutin olahraga dan ingin meningkatkan produktivitas kerja.', 'High Achiever' => 'Atlet amatir atau individu dengan target kebugaran spesifik.'],
        ];
        
        foreach ($data as $datas) {
            Kategori::firstOrCreate($datas);

        }
    }
}

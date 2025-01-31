<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPeserta;
class DataPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama'=> 'Budi','profesi'=> 'pekerja kantoran','tujuan' => 'menurunkan berat badan','rekomendasi_latihan' => 'Lari pagi',]
        ];
        
        foreach ($data as $datas) {
            DataPeserta::firstOrCreate($datas);

        }
    }
}

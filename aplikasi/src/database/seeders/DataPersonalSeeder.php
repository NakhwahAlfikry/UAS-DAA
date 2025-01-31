<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPersonal;
class DataPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Nama' => 'Budi','Tinggi_Badan' => '169 cm', 'Berat_Badan' => '70 kg', 'Usia' => '34', 'Jam_Tidur' => '10 Malam',]
        ];
        
        foreach ($data as $datas) {
            DataPersonal::firstOrCreate($datas);

        }
    }
}

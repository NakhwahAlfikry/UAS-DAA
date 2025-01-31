<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Latihan;

class LatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Kantoran' => 'Lari','Wirausahawan'=> 'Peregangan', 'Di_Rumah' => 'Push up', 'Durasi' => '10 menit',]
        ];
        
        foreach ($data as $datas) {
            Latihan::firstOrCreate($datas);

        }
    }
}

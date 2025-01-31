<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Healthy_Life_Productivity' => 'Perusahaan kesehatan dan kebugaran meningkatkan produktivitas individu.','Fokus_Perusahaan' => 'Misi HealthyLife Productivity adalah membantu pekerja sibuk tetap sehat fisik dan mental','Pelayanan'=>'HealthyLife Productivity menyediakan berbagai layanan berbasis gaya hidup aktif','Tim'=>'Tim HealthyLife Productivity mencakup trainer, ahli gizi, dan psikolog untuk kebugaran, nutrisi, dan kesehatan mental.'],
        ];
        
        foreach ($data as $datas) {
            Profile::firstOrCreate($datas);

        }
}
}
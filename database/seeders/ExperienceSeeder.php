<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;


class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::truncate();

        Experience::create([
            'position' => 'Full Stack Developer',
            'company' => 'VBEYOND Development Limited Company',
            'start_date' => '2024-03-24',
            'end_date' => null,
            'description' => 'Developed in-house systems using PHP Laravel, Vue.js, TailwindCSS, Microsoft Power Apps, Microsoft Power Automate.',
        ]);
        Experience::create([
            'position' => 'Full Stack Developer',
            'company' => 'Beehive Co., Ltd., Bangkok.',
            'start_date' => '2023-08-01',
            'end_date' => '2024-02-29',
            'description' => 'Developed a comprehensive car repair system using PHP Laravel, Livewire, Alpine.js, TailwindCSS, Tabulator.',
        ]);
        Experience::create([
            'position' => 'Full Stack Developer',
            'company' => 'English Online Co., Ltd., Bangkok.',
            'start_date' => '2023-03-01',
            'end_date' => '2023-07-31',
            'description' => 'Developed English learning website using PHP, HTML, JavaScript, CSS, jQuery, and Bootstrap.',
        ]);
        Experience::create([
            'position' => 'Backend Developer',
            'company' => 'English Online Co., Ltd., Bangkok.',
            'start_date' => '2020-11-01',
            'end_date' => '2023-02-28',
            'description' => 'Developed English learning website using PHP, JS, and jQuery.',
        ]);
        Experience::create([
            'position' => 'Cooperative Education (Backend Developer)',
            'company' => 'Phoenixsoft Corp., Ltd., Samut Prakan.',
            'start_date' => '2016-07-11',
            'end_date' => '2016-10-28',
            'description' => 'Developed website using PHP Yii2 Framework.',
        ]);
    }
}

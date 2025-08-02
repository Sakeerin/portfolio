<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::truncate();
        Education::create([
            'school' => 'Wuxi Institute of Technology',
            'degree' => 'Bachelor',
            'major' => 'Software Technology',
            'start_year' => '2017',
            'end_year' => '2020',
        ]);
        Education::create([
            'school' => 'Walailak University',
            'degree' => 'Bachelor',
            'major' => 'Software Engineering',
            'start_year' => '2013',
            'end_year' => '2017',
        ]);
    }
}

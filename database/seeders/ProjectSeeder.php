<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'title' => 'Car Repair System',
            'description' => 'A comprehensive car repair system built for Beehive Co., Ltd. Developed using Laravel, Livewire, Alpine.js, TailwindCSS, and Tabulator.',
            'image' => null, // Add path if you upload images
            'link' => 'https://beehive.example.com',
            'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'TailwindCSS', 'Tabulator'],
        ]);
        Project::create([
            'title' => 'English Learning Platform',
            'description' => 'A website for learning English online. Built using PHP, HTML, JavaScript, CSS, jQuery, and Bootstrap.',
            'image' => null,
            'link' => 'https://englishonline.example.com',
            'technologies' => ['PHP', 'HTML', 'JavaScript', 'CSS', 'jQuery', 'Bootstrap'],
        ]);
        Project::create([
            'title' => 'In-House System',
            'description' => 'An internal platform for VBEYOND Development Limited Company using Laravel, Vue.js, TailwindCSS, Power Apps, and Power Automate.',
            'image' => null,
            'link' => null,
            'technologies' => ['Laravel', 'Vue.js', 'TailwindCSS', 'Power Apps', 'Power Automate'],
        ]);
    }
}

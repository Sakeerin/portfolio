<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::truncate();

        $skills = [
            ['name' => 'HTML5', 'category' => 'Programming'],
            ['name' => 'CSS', 'category' => 'Programming'],
            ['name' => 'PHP', 'category' => 'Programming'],
            ['name' => 'JavaScript', 'category' => 'Programming'],
            ['name' => 'Node.js', 'category' => 'Programming'],
            ['name' => 'jQuery', 'category' => 'Library'],
            ['name' => 'MySQL', 'category' => 'Database'],
            ['name' => 'NoSQL', 'category' => 'Database'],
            ['name' => 'Python', 'category' => 'Programming'],
            ['name' => 'Yii2', 'category' => 'Framework'],
            ['name' => 'Laravel', 'category' => 'Framework'],
            ['name' => 'Bootstrap', 'category' => 'Framework'],
            ['name' => 'MongoDB', 'category' => 'Database'],
            ['name' => 'Express', 'category' => 'Framework'],
            ['name' => 'AlpineJS', 'category' => 'Library'],
            ['name' => 'TailwindCSS', 'category' => 'Framework'],
            ['name' => 'Tabulator', 'category' => 'Library'],
            ['name' => 'Vue.js', 'category' => 'Framework'],
            ['name' => 'Docker', 'category' => 'Dev Tool'],
            ['name' => 'Git', 'category' => 'Dev Tool'],
            ['name' => 'Bitbucket', 'category' => 'Dev Tool'],
            ['name' => 'Sourcetree', 'category' => 'Dev Tool'],
            ['name' => 'MS Teams', 'category' => 'Dev Tool'],
            ['name' => 'UML Diagrams', 'category' => 'Dev Tool'],
            ['name' => 'Chrome DevTools', 'category' => 'Dev Tool'],
            ['name' => 'Postman', 'category' => 'Dev Tool'],
            ['name' => 'Microsoft Power Apps', 'category' => 'Dev Tool'],
            ['name' => 'Power Automate', 'category' => 'Dev Tool'],
            ['name' => 'OOP', 'category' => 'Programming'],
            ['name' => 'OSX', 'category' => 'OS'],
            ['name' => 'Windows', 'category' => 'OS'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}

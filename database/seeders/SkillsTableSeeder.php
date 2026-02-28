<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['skill' => "React.js", 'proficiency' => 'Intermediate', 'category' => 'Framework', 'icon_name' => 'react.svg'],
            ['skill' => "TailwindCSS", 'proficiency' => 'Intermediate', 'category' => 'Framework', 'icon_name' => 'tailwindcss.svg'],
            ['skill' => "TypeScript", 'proficiency' => 'Intermediate', 'category' => 'Language', 'icon_name' => 'typescript.svg'],
            ['skill' => "JavaScript", 'proficiency' => 'Advanced', 'category' => 'Language', 'icon_name' => 'javascript.svg'],
            ['skill' => "Laravel", 'proficiency' => 'Beginner', 'category' => 'Framework', 'icon_name' => 'laravel.svg'],
            ['skill' => "PHP", 'proficiency' => 'Beginner', 'category' => 'Language', 'icon_name' => 'php.svg'],
            ['skill' => 'MySQL', 'proficiency' => 'Intermediate', 'category' => 'Database', 'icon_name' => 'mysql.svg'],
            ['skill' => 'Python', 'proficiency' => 'Intermediate',  'category' => 'Language', 'icon_name' => 'python.svg'],
            ['skill' => 'Arduino', 'proficiency' => 'Intermediate',  'category' => 'Tools', 'icon_name' => 'arduino.svg'],
            ['skill' => 'Git', 'proficiency' => 'Intermediate',  'category' => 'Tools', 'icon_name' => 'git.svg']
        ]);
    }
}

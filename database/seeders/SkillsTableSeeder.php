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
            ['skill' => "React.js", 'proficiency' => 'Intermediate'],
            ['skill' => "TailwindCSS", 'proficiency' => 'Intermediate'],
            ['skill' => "JavaScript", 'proficiency' => 'Advanced'],
            ['skill' => "Laravel", 'proficiency' => 'Beginner'],
            ['skill' => "PHP", 'proficiency' => 'Beginner'],
        ]);
    }
}

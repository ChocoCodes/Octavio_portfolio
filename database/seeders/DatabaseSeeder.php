<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SkillsTableSeeder::class,
            ProfileSeeder::class,
            ProjectSeeder::class,
            ContactsSeeder::class,
            CertificateSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class
        ]);
    }
}

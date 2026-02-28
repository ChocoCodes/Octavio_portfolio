<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certificates')->insert([
            [
                'name' => 'CS50x: Intro to CS',
                'issuer' => 'Harvard',
                'filename' => 'cs50x-2025.png',
                'obtained_on' => 2025,
            ],
            [
                'name' => 'APAC Solution Challenge 2025',
                'issuer' => 'Google',
                'filename' => 'solcha.png',
                'obtained_on' => 2025,
            ],
            [
                'name' => 'Python Data Associate',
                'issuer' => 'DataCamp',
                'filename' => 'python-data-associate.png',
                'obtained_on' => 2024,
            ],
            [
                'name' => 'SQL Associate',
                'issuer' => 'DataCamp',
                'filename' => 'sql-associate.png',
                'obtained_on' => 2024,
            ],
            [
                'name' => 'Advanced JavaScript',
                'issuer' => 'Scrimba',
                'filename' => 'advanced-js.png',
                'obtained_on' => 2024,
            ],
            [
                'name' => 'Tailwind CSS',
                'issuer' => 'Scrimba',
                'filename' => 'tailwind.png',
                'obtained_on' => 2024,
            ],
            [
                'name' => 'TypeScript',
                'issuer' => 'Scrimba',
                'filename' => 'typescript.png',
                'obtained_on' => 2024,
            ],
        ]);
    }
}

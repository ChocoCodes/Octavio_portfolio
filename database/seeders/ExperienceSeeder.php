<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'role'          => 'Chief Technology Officer',
                'organization'  => 'Google Developer Groups on Campus - USLS',
                'contributions' => "Managed 50+ officers across 4 departments, supervising 4 departmental projects and leading initiatives such as Build with AI workshop for 30+ participants.|Established partnerships with FilPass and Algorithmics to organize speaker sessions and resources.|Contributed to the development and implementation of key platforms such as Club Fair and LWeek websites.",
                'start'         => 2024,
                'end'           => null,
            ],
            [
                'role'          => 'Web Development Lead',
                'organization'  => 'Google Developer Groups on Campus - USLS',
                'contributions' => "Led a 5-member team (with co-lead) to develop and support initiatives for the University Club Fair.|Developed a Python automation script for Google Drive image uploads using Watchdog and Google Drive API, streamlining distribution of 500+ photos over a 3-day event.",
                'start'         => 2024,
                'end'           => 2024,
            ],
        ]);
    }
}

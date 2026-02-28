<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'institution' => 'University of St. La Salle - Bacolod',
                'level'       => 'Undergraduate',
                'degree'      => 'BS Computer Science',
                'major'       => 'Game Development',
                'start'       => 2023,
                'end'         => 2027,
                'activities'  => "DICT Startup Competition (2025)|NextGenPH: Startup Competition (2025)|Google APAC Solution Challenge (2025)",
            ],
            [
                'institution' => 'University of Negros Occidental - Recoletos',
                'level'       => 'Senior High School',
                'degree'      => 'STEM - Engineering and Information Technology',
                'major'       => null,
                'start'       => 2021,
                'end'         => 2023,
                'activities'  => "Research Colloquium (2023)|UNO-R Rams Basketball Team (2023)",
            ],
        ]);
    }
}

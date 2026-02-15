<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            "fname" => "John Roland",
            "lname" => "Octavio",
            "title" => "Chief Technology Officer @ GDG-USLS",
            "bio" => "I build clean, practical, and effective solutions.",
            "location" => "Bacolod City, Negros Occidental, PH",
            "email" => "s2300380@usls.edu.ph"
        ]);
    }
}

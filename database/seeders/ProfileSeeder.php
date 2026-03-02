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
            "image_filename" => 'octavio.jpg',
            "title" => "Third Year CS Student @ USLS - Bacolod",
            "bio" => "I build clean, practical, and effective solutions. Currently serving as the <b class='text-accent'>Chief Technology Officer</b> and was the former <b class='text-accent'>Web Development Lead</b> of <i>Google Developer Groups on Campus-USLS.</i>",
            "location" => "Bacolod City, Negros Occidental, PH",
            "description" => "I am a third-year Computer Science student working toward becoming a Software Engineer. During my term as the CTO, I supervised departmental projects and initiatives, 
            including hands-on workshops and collaborative events. As Web Development Lead, I focused on my fundamentals on native web languages before I transitioned to the club's recommended frameworks React and Next.js. 
            I have a detail-oriented approach to programming to ensure that my projects are of the highest quality possible. Outside of coding, I enjoy building LEGO and engaging in physical activities such as exercising, going to the gym, or practicing Muay Thai. 
            I also like playing chill games and often dedicate my free time upskilling and exploring new technologies. As of the moment, I am strengthening my full-stack skills and Deep Learning technologies.",
            "resume_url" => 'https://drive.google.com/file/d/15RlLx6T4VmIiO0gVO_F0aS3TIgHjJUnI/view?usp=sharing'
        ]);
    }
}

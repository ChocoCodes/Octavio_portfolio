<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Portfolio Website',
                'description' => 'Personal Portfolio Website w/ RAG Chatbot',
                'tech_stack' => 'Next.js, TypeScript, Tailwind, Vercel AI SDK',
                'image_url' => 'portfolio.png',
                'demo_url' => 'https://johnrlnd.dev',
                'github_url' => 'https://github.com/ChocoCodes/portfolio'
            ],
            [
                'title' => 'eSkolar',
                'description' => 'Proof-of-Concept Centralized Scholarship Management Platform.',
                'tech_stack' => 'Next.js, TypeScript, Supabase, GroqAI, ChromaDB',
                'image_url' => 'eSkolar-logo.png',
                'demo_url' => 'https://drive.google.com/file/d/1QrwFCAgyd5lCa1kblCC9X1f-2Bm_GMco/view?usp=sharing',
                'github_url' => 'https://github.com/ChocoCodes/eskolar'
            ],
            [
                'title' => 'Bantala',
                'description' => 'Community-Powered Web Application with RAG.',
                'tech_stack' => 'Next.js, Firebase, TypeScript, Python',
                'image_url' => 'bantala.png',
                'demo_url' => 'https://www.youtube.com/watch?v=EcPemPmNJa8',
                'github_url' => 'https://github.com/ChocoCodes/solcha-bb'
            ],
            [
                'title' => 'Kinot',
                'description' => 'Expense Tracking System for Harvard: CS50x.',
                'tech_stack' => 'React, TypeScript, Python, Flask',
                'image_url' => 'kinot.png',
                'demo_url' => 'https://www.youtube.com/watch?v=rR93CpdobmA',
                'github_url' => 'https://github.com/ChocoCodes/kinot'
            ],
            [
                'title' => 'Nixar POS',
                'description' => 'Point of Sale (POS) system for Nixar Auto Glass & Car Tint.',
                'tech_stack' => 'PHP, MySQL, JavaScript',
                'image_url' => 'nixar-pos.png',
                'demo_url' => 'https://drive.google.com/file/d/1WrP2BQSUlMnlElFJBkaaJfB0jaCJPhhL/view?usp=sharing',
                'github_url' => 'https://github.com/ChocoCodes/nixar-pos'
            ],
            [
                'title' => 'MatrixLab',
                'description' => 'Simple Matrix Arithmetic calculator.',
                'tech_stack' => 'HTML5, JavaScript, CSS',
                'image_url' => 'matrixlab.png',
                'demo_url' => 'https://matrix-lab-sigma.vercel.app/',
                'github_url' => 'https://github.com/ChocoCodes/matrix-lab'
            ],
            [
                'title' => 'Smart Irrigation System',
                'description' => 'Smartphone-Controlled Irrigation System using HC05 bluetooth module.',
                'tech_stack' => 'Arduino, MIT App Inventor',
                'image_url' => 'smartphone.png',
                'demo_url' => null,
                'github_url' => 'https://github.com/ChocoCodes/automated-irrigation-system'
            ],
            [
                'title' => 'Scientia Aeternum',
                'description' => 'Curated reflections and key takeaways from the STS course.',
                'image_url' => 'aeternum.png',
                'tech_stack' => 'React, TypeScript, CSS',
                'demo_url' => 'https://scientia-aeternum.vercel.app',
                'github_url' => 'https://github.com/ChocoCodes/scientia-aeternum'
            ]
        ]);
    }
}

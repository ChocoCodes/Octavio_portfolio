<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ['title' => 'eSkolar', 'description' => 'AI-Powered Scholarship Management System', 'tech_stack' => 'Next.js, TypeScript, Supabase, GroqAI, ChromaDB'],
            ['title' => 'JhongWebsite', 'description' => 'Porfolio Website with RAG-powered chatbot', 'tech_stack' => 'Next.js, TypeScript, Tailwind, Vercel AI SDK', 'demo_url' => 'https://johnrlnd.dev'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

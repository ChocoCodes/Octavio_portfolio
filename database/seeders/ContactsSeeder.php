<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['platform' => 'Email', 'icon_name' => 'gmail.svg', 'url' => 'mailto:johnrlnd1704@gmail.com?subject=Inquiry%20From%20Porfolio', 'username' => 'johnrlnd1704@gmail.com'],
            ['platform' => 'Github', 'icon_name' => 'github.svg', 'url' => 'https://github.com/ChocoCodes', 'username' => 'ChocoCodes'],
            ['platform' => 'Discord', 'icon_name' => 'discord.svg', 'url' => 'https://discord.com/users/335627275821252608', 'username' => 'ambasingh404'],
            ['platform' => 'LinkedIn', 'icon_name' => 'linkedin.svg', 'url' => 'https://www.linkedin.com/in/johnrlnd', 'username' => 'John Roland Octavio'],
        ]);
    }
}

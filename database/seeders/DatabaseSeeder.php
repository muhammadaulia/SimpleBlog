<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Home;
use App\Models\Category;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        # Fitur Factory (Dengan bantuan library Faker Membuat Data Dummy)
        \App\Models\User::factory(3)->create();

        Contact::factory(8)->create();

        # Database Seeding (Mengisi Manual Data Dummy)
        /* 
        User::create([
            'name' => 'James Arthur',
            'email' => 'jamesarthur@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Philip Arthur',
            'email' => 'philiparthur@gmail.com',
            'password' => bcrypt('5678')
        ]);

        User::create([
            'name' => 'Stewie Griffin',
            'email' => 'stewiegriffin@gmail.com',
            'password' => bcrypt('13467')
        ]);
        */
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
/* 
        Home::create([
            'title' => 'Laravel',
            'category_id' => mt_rand(1,3), // Memilih kategori random
            'user_id' => mt_rand(1,3), // Memilih user random
            'slug' => 'laravel',
            'body' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.'
        ]);
*/
        Home::factory(20)->create();
    }
}

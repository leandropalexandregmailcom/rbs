<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Grade;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Category;
use Faker\Provider\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Company::factory(10)->create();
        Client::factory(10)->create();
        Comment::factory(10)->create();
        Grade::factory(10)->create();
        Service::factory(10)->create();

    }
}

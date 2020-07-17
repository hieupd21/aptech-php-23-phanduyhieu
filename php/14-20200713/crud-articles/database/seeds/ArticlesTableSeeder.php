<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
            Article::create([
                'name' => $faker->name(),
                'title' => $faker->sentence(),
                'content' => $faker->text(rand(1000, 3000))
            ]);
        }
    }
}

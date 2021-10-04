<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $value) {
            DB::table('articles')->insert([
                'title' => $faker->text(50),
                'body' => $faker->text(200),
            ]);
        }
        // factory(App\Models\Article::class, 30)->create();
    }
}

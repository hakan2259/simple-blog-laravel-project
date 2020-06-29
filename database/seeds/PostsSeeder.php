<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0;$i<20;$i++){
            DB::table("posts")->insert([
                "category_id" => rand(1,6),
                "title" => $faker->sentence(),
                "image" => $faker->imageUrl("640","480","cats"),
                "content" => $faker->paragraph,
                "hit" => rand(1,50),
                "slug" => Str::slug($faker->sentence),
                "created_at" => $faker->dateTime,
                "updated_at" => now()
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Post');

        for($i=0; $i<=22; $i++) {
        DB::table('posts')->insert([
          'title' => $faker->text(30),
          'body' => implode($faker->paragraphs(rand(18,28))),
          'slug' => $faker->slug,
          'created_at' => \Carbon\Carbon::now(),
          'updated_at'  => \Carbon\Carbon::now(),
          ]);
        }

    }
}

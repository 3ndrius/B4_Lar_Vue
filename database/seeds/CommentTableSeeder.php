
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Comment');

        for($i=0; $i<=42; $i++) {
        DB::table('comments')->insert([
          'name' => $faker->name,
          'email' =>$faker->email,
          'comment' => implode($faker->paragraphs(rand(1,4))),
          'approved' =>$faker->boolean,
          'post_id' => $faker->numberBetween($min = 120, $max = 130),
          'created_at' => \Carbon\Carbon::now(),
          'updated_at'  => \Carbon\Carbon::now(),
          ]);
        }

    }
}

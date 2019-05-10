<?php
use Faker\Factory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->truncate();

        // generate 10 dummy posts data
        $posts = [];
        $faker = Factory::create();
        $mutable = Carbon::now(); 
        for ($i = 1; $i <= 10; $i++)
        {
            $image = "Post_Image_" . rand(1, 5) . ".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2016-07-18 08:00:00 +{$i} days"));

            $posts[] = [
                'user_id' => 8,
                'title' => $faker->sentence(rand(8, 12)),
                'body' => $faker->sentence(rand(8, 12)),
                'slug' => $faker->slug(),
                'image' => $image,
                'created_at' => $date,
                'updated_at' => $date,
                'published_at'=>$mutable,
                'category_id'=>rand(1,2),
                'view_count'=>5*rand(1, 3),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}

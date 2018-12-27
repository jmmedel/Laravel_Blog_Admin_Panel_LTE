<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        DB::table('posts')->insert([
            ['id' => 1,'title' =>"Post One",'subtitle' => "Post one content",'slug' => "Post one ",'body' => "Post one ",'status' => true,'posted_by' => 1,'image' => "",'like' => 1,'dislike' => 21,'created_at' => now(),'updated_at' => now()],
            ['id' => 2,'title' =>"Post two",'subtitle' => "Post two content",'slug' => "Post two ",'body' => "Post two ",'status' => true,'posted_by' => 2,'image' => "",'like' => 12,'dislike' => 23,'created_at' => now(),'updated_at' => now()],
            ['id' => 3,'title' =>"Post three",'subtitle' => "Post three content",'slug' => "Post three ",'body' => "Post three ",'status' => true,'posted_by' => 3,'image' => "",'like' => 13,'dislike' => 23,'created_at' => now(),'updated_at' => now()],
         ]);

    }
}

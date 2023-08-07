<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        Post::factory(5)->create();
//        $user = User::factory()->create();
//        $personal = Category::create([
//            'name'=>'Personal',
//            'slug'=>'personal',
//        ]);
//        $work = Category::create([
//            'name'=>'Work',
//            'slug'=>'work',
//        ]);
//        $family = Category::create([
//            'name'=>'Family',
//            'slug'=>'family',
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family post',
//            'slug'=>'my-first-post',
//            'excerpt'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores illum minus nesciunt quod, quos reiciendis saepe tenetur! Earum rem, sit. A accusantium commodi consequatur illum iusto magnam nobis omnis    quo vel voluptates. A, assumenda aut blanditiis eligendi, enim eos fuga laboriosam neque nihil nobis perspiciatis quas quidem, suscipit tempora vitae?</p>',
//            'published_at'=>'2021-01-01',
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'My Personal post',
//            'slug'=>'my-second-post',
//            'excerpt'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores illum minus nesciunt quod, quos reiciendis saepe tenetur! Earum rem, sit. A accusantium commodi consequatur illum iusto magnam nobis omnis    quo vel voluptates. A, assumenda aut blanditiis eligendi, enim eos fuga laboriosam neque nihil nobis perspiciatis quas quidem, suscipit tempora vitae?</p>',
//            'published_at'=>'2021-02-01',
//        ]);
    }
}

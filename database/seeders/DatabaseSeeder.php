<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work '
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada iaculis risus sed vehicula. Vestibulum ex sapien, placerat in luctus ut, lacinia eget justo. Integer lobortis, diam id accumsan fringilla, lectus libero pretium turpis, non sodales tellus metus quis tellus. Duis posuere tristique urna vitae viverra. Ut blandit fringilla magna nec bibendum. Morbi aliquam turpis id lobortis tincidunt. Phasellus suscipit ac velit sit amet semper. Donec at risus vel justo aliquet eleifend.</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada iaculis risus sed vehicula. Vestibulum ex sapien, placerat in luctus ut, lacinia eget justo. Integer lobortis, diam id accumsan fringilla, lectus libero pretium turpis, non sodales tellus metus quis tellus. Duis posuere tristique urna vitae viverra. Ut blandit fringilla magna nec bibendum. Morbi aliquam turpis id lobortis tincidunt. Phasellus suscipit ac velit sit amet semper. Donec at risus vel justo aliquet eleifend.</p>',
        ]);
    }
}

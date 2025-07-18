<?php

namespace Database\Seeders;

use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $mgmg = User::factory()->create(['name' => 'mgmg', 'username' => 'mgmg']);
        $kyawkyaw = User::factory()->create(['name' => 'kyawkyaw', 'username' => 'kyawkyaw']);
        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend', 'slug' => 'backend']);  
        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $mgmg->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $kyawkyaw->id]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        foreach (User::all() as $user) {
            $user->profile()->create([
                'bio' => 'Ini adalah bio untuk user ' . $user->id,
                'website' => 'https://ilmudata.id/user/' . $user->id,
            ]);
        }

        foreach (User::all() as $user) {
            $user->posts()->create([
                'title' => 'Judul Post untuyk user ' . $user->id,
                'content' => 'Ini adalah kontent dari post untuk user ' . $user->id,
            ]);
        }

        foreach (Post::all() as $post) {
            $tag = Tag::create(['name' => 'Tag untuk post ' . $post->id]);
            $post->tags()->attach($tag->id);
        }
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

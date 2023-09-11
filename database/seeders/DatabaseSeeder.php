<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Page;
use App\Models\Content;
use App\Models\Touchable;
use App\Models\Sound;
use App\Models\PageContent;
use App\Models\PageTouchable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Story::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Story::factory(10)->create();
        Sound::factory(10)->create();
        Content::factory(10)->create();
        Touchable::factory(10)->create();
        Page::factory(10)->create();
        PageContent::factory(10)->create();
        PageTouchable::factory(10)->create();


    }
}

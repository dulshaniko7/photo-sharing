<?php

use App\AlbumCategory;
use App\User;
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
        //factory(User::class,1)->create();
        AlbumCategory::create(['name' => 'Nature']);
        AlbumCategory::create(['name' => 'WildLife']);
        AlbumCategory::create(['name' => 'People']);
        AlbumCategory::create(['name' => 'Technology']);
        AlbumCategory::create(['name' => 'Animals']);
        AlbumCategory::create(['name' => 'Under Water']);
        AlbumCategory::create(['name' => 'Night']);

    }
}

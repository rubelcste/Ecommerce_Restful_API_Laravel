<?php

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
        // $this->call(UsersTableSeeder::class);
    //     factory(App\User::class, 50)->create()->each(function ($user) {
    //     $user->posts()->save(factory(App\Post::class)->make());
    // });
    	factory(App\Model\Product::class,50)->create();
        factory(App\Model\Review::class,300)->create();
    }
}

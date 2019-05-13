<?php

use Illuminate\Database\Seeder;
use App\Prodcut;
use App\Review;
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


        factory(App\Prodcut::class,50)->create();

        factory(App\Review::class,300)->create();
    }
}

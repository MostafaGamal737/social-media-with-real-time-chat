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
     Factory(App\User::class,20)->create();
      Factory(App\product::class,200)->create();
      Factory(App\Review::class,1000)->create();
    }
}

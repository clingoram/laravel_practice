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
        // $this->call(UserSeeder::class);
        $this->call(MerchandiseTableSeeder::class);

        DB::table('merchandises')->truncate();
        factory(App\Models\Merchandise::class, 10)->create();
    }
}

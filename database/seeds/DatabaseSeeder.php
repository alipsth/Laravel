<?php

use Illuminate\Database\Seeder;
use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //    $this->call(PostTableSeeder::class);
    	// $this->call(Gajian::class);
    	// $this->call(CrudSeeder::class);

    	factory(Barang::class,100)->create();
    }
}

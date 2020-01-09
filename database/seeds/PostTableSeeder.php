<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$post =[
        ['title'=>'Tips Cepat pintar','content'=>'13+'],
        ['title'=>'Haruskah menunda pintar ?','content'=>'13+'],
        ['title'=>'Membangun Visi Misi Kepintaran ^-^','content'=>'13+']
    ];

    // Masukan data ke database
    DB::table('posts')->insert($post);
    }
}

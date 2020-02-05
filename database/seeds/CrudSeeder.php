<?php

use App\Crud;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$no=10;
    	for ($i=0; $i <$no ; $i++) { 
        $crud =new Crud();
        $crud->judul='Ternak Kuda '.$i;
        $crud->slug=Str::slug($crud->judul, '-');
        $crud->deskripsi ="Lorem Ipsum IsTheBeas";
        $crud->sinopsis = Str::limit($crud->deskripsi,50);
        $crud->save();
    	
    	}
    }
}

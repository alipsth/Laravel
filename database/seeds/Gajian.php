<?php

use Illuminate\Database\Seeder;

class Gajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peng=[
        	['nama'=>'Alif','jabatan'=>'Boss','jenis_kelamin'=>'Laki-Laki',
        	'alamat'=>'Kopo Cirang-rang','agama'=>'Islam','total_gaji'=>'10000000'],

        	['nama'=>'Ujang gibek','jabatan'=>'Pelajar','jenis_kelamin'=>'Laki-Laki',
        	'alamat'=>'Kopo Cirang-rang','agama'=>'Islam','total_gaji'=>'65.000.000'],

        	['nama'=>'Nue','jabatan'=>'SPG','jenis_kelamin'=>'Laki-Laki',
        	'alamat'=>'Kopo Cirang-rang','agama'=>'Islam','total_gaji'=>'500000'],
        	
        ];
        DB::table('gajians')->insert($peng);
    }
}

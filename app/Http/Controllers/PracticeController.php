<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
	public function pass()
	{
    	$a= "LOVE MOM LOVE PAH";
    	return view('latihan',compact('a'));
	}

	public function pass1()
	{
		$data =[
			['nama'=> 'Ujang','kelas'=> '12 Ekonomi'],
			['nama'=> 'Ujing','kelas'=> '11 Ekonomi'],
			['nama'=> 'Ujung','kelas'=> '10 Ekonomi'],
		];
		return view('latihan1',['siswa'=> $data]);
	}


	public function latsol()
	{
		$data = [
			['nama'=> 'Alif','nip'=> '008976','agama'=> 'islam','jk'=> 'Laki-laki',
			'jabatan'=> 'Manager','jam_kerja'=> '250'],

			['nama'=> 'Rifa','nip'=> '108976','agama'=> 'islam','jk'=> 'Laki-laki',
			'jabatan'=> 'Staff','jam_kerja'=> '200'],

			['nama'=> 'Anes','nip'=> '208976','agama'=> 'kristen','jk'=> 'Laki-laki',
			'jabatan'=> 'Sekretaris','jam_kerja'=> '140'],
		];
		return view ('latihansoal',['pegawai'=> $data]);
	}
}

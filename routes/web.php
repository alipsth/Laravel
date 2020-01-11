<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang JOSS';
});


Route::get('bio',function(){
	return view ('biodata');
});
//Route Parameter
Route::get('pesan/{makan}/{minum}/{total}',function($mkn,$mnm,$ttl){
	return'Makanan Yang saya pesan adalah :' .$mkn.'<br>'
	.'Minuman yang saya pesan adalah :'.$mnm.'<br>'
	.'Total Harga :'.$ttl;
});

// Route Opsional Parameter
Route::get('halo/{nama?}',function($nama='Alif'){
	return 'Hallo Nama Saya ' .$nama;
});

//Tugas 
Route::get('pesanan/{makan?}/{minum?}/{harga?}',function($mkn=null,$mnm=null,$hrg=null){
	if (isset($mkn)) {
		echo "Anda Memesan " .$mkn;
	}if (isset($mnm)) {
			echo " & " .$mnm;		
	}if (isset($hrg)) {
		echo " Dengan harga " .$hrg ;
	}if ($mkn == null && $mnm == null && $hrg == null) {
		echo "Anda belum memesan !";
	}
});

//Memanggil semua model 
Route::get('/testmodel1',function(){
	$query = App\Post::all();
	return $query;
});

//Mencari model berdasarkan id
Route::get('/testmodel2',function(){
	$query = App\Post::Find(1);
	return $query;
});

//Mencari model berdasarkan title
Route::get('/testmodel3',function(){
	$query = App\Post::where('title','like','%Tips Cepat Pintar%')->get();
	return $query;
});
//Mengubah record/isi model (hapus semua isi function)
Route::get('/testmodel4',function(){
	$query = App\Post::Find(1);
	$query->title='Jorojosss';
	$query->save();
	return $query;
});

//Menghapus record/isi model (hapus semua isi function)
Route::get('/testmodel5',function(){
	$query = App\Post::Find(2);
	$query->delete();
});

//Menambah record
Route::get('/testmodel6',function(){
	$query =new App\Post;
	$query->title='7 Tips Menjadi Pintar';
	$query->content ="banyak lah sedekah";
	$query->save();
	return $query;
});

//Tugas penggajian
Route::get('/penggajian',function(){
	$query = App\Gajian::all();
	return $query;
});

Route::get('/penggajian1',function(){
	$query = App\Gajian::where('agama','=','islam')->get();
	return $query;
});

//Untuk memanggil id,nama dan agama aja 
Route::get('/penggajian2',function(){
	$query = App\Gajian::select('id','nama','agama')->get();
	return $query;
});



Route::get('/penggajian4',function(){
	$gaji = New App\Gajian();
	$gaji->nama ='Indah Mambo';
	$gaji->jabatan ='Sekretaris';
	$gaji->jenis_kelamin ='Perempuan';
	$gaji->alamat ='Bojong Honeng';
	$gaji->agama ='Islam';
	$gaji->total_gaji ='1.000.000.000(SAMILIUER)';
	$gaji->save();
	return $gaji;
});

// Route::get('profil1',function(){
// 	return view ('profil1');
// });

// Route::get('profil2',function(){
// 	return view ('profil2');
// });

// Route::get('profil3',function(){
// 	return view ('profil3');
// });

// Route::get('profil4',function(){
// 	return view ('profil4');
// });

// Route::get('profil5',function(){
// 	return view ('profil5');
// });

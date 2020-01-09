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
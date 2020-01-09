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

Route::get('pesan/{makan}/{minum}/{total}',function($mkn,$mnm,$ttl){
	return'Makanan Yang saya pesan adalah :' .$mkn.'<br>'
	.'Minuman yang saya pesan adalah :'.$mnm.'<br>'
	.'Total Harga :'.$ttl;
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

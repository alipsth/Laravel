<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function halo()
    {
    	return "Hallo Baraya";
    }
    public function dunia()
    {
    	return "Hallo Dunia";
    }
    public function alam()
    {
    	return "Hallo Alam";
    }
    public function semesta()
    {
    	return "Hallo Semesta";
    }
    public function langit()
    {
    	return "Hallo langit";
    }
    public function bumi()
    {
    	return "Hallo Bumi";
    }
    public function mars()
    {
    	return "Hallo Mars";
    }
    public function jupiter()
    {
    	return "Hallo Jupiter";
    }
    public function alien()
    {
    	return "Hallo Alien";
    }
    public function planet()
    {
    	return "Hallo Planet";
    }
    public function jeniskucing($warna=null)
    {
    	if (!$warna) {
        return "Anda Tidak Memiliki Kucing !";
    }else{
        return "Warna kucing kamu : " .$warna;
    }
    }

    //Latihan 
    public function meser($jenis=null,$harga=null)
    {
        if(isset($jenis)){
            echo "Anda Beli : " .$jenis;
        }if (isset($harga)) {
        if ($harga >= 15000) {
            echo  " Dengan ukuran JUMBO";
        }elseif ($harga < 15000 && $harga >= 7500) {
            echo " Dengan ukuran MEDIUM";
        }elseif ($harga <= 7500) {
            echo " Dengan ukuran SMILE";
        }
    }
        if ($jenis ==null && $harga==null) {
            echo "Silahkan Masukan Item Terlebih Dahulu !!!";
        }else{
            echo "Anda memasukan angka yang salah";
        }
    }
}



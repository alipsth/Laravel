<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;
class BookController extends Controller
{
    public function index()
    {
    	$buku=Book::all();
    	return $buku;
    }

    public function create($jdl)
    {
    	$buku =new Book();
    	$buku->title = $jdl;
    	$buku->publisher ="Aptm Studio";
    	$buku->price=150000;
    	$buku->synopsis="Lorem Ipsum";
    	$buku->pages =100;
    	$buku->status=false;
    	$buku->date =Carbon::now();
    	$buku->save();
    	return $buku;
    }

    public function show($id)
    {
    	$buku=Book::find($id);
    	return $buku;
    }

    public function edit($id,$jdl)
    {
    	$buku =Book::find($id);
    	$buku->title =$jdl;
    	$buku->publisher ="Aptm Studio";
    	$buku->pages =100;
    	$buku->date =Carbon::now();
    	$buku->price=150000;
    	$buku->status=false;
    	$buku->synopsis="Lorem Ipsum";
    	$buku->save();
    	return $buku;	
    }
    public function hapus($id)
    {
    	$buku=Book::find($id);
    	$buku->delete();
    	return $buku;
    }

    public function select()
    {
    	$buku=Book::select('title','publisher','pages','price')->take(3)->get();
    	return $buku;
    }
    public function record()
    {
    	$buku=Book::count();
    	return $buku;
    }
}

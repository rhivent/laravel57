<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//menggunakan database harus menggunakan class facades yg ada di file config/app.php
use Illuminate\Support\Facades\DB;

//memberi tahu untuk menggunakan file blog.php
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
		// mengambil data
		$blogs = Blog::all();
		//isi die dump variabel $blogs
		// dd($blogs);
		
		//mengoper nilainya 
		return view('/blog/home',[
			'blogs' => $blogs
		]);
	}
	
	// public function show($id){
		// return $id;
	// }
	
	// public function show($id){
		// return view('blog/single',['blog' => $id]);
	// }
	
	
	// public function show($id){
		// $nilai = 'Ini adalah nilai ' . $id;
		// return view('blog/single',['blog' => $nilai]);
	// }
	
	//nama boleh lebih dari satu yaitu blog dan user
	/* public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		$user = 'Riventus AHA';
		return view('blog/single',['blog' => $nilai, 'user' => $user]);
	} */
	
	/* jika nilainya adalah array maka nilai dari users pada blade template tidak bisa dimunculkan karena tanda {{}} ini seperti echo pada php untuk memunculkan string value sehingga perlu looping untuk array yaitu foreach*/
/* 	public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		// $user = 'Riventus AHA';
		
		$users = ['riventus','armandus','hamonangan'];
		return view('blog/single',['blog' => $nilai, 'users' => $users]);
	} */
	
	//merunning tag html pada controller untuk blade template di view
	/* public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		// $user = 'Riventus AHA';
		
		$users = ['riventus','armandus','hamonangan'];
		
		$unescaped = '<script>alert("HAHA!");</script>';
		return view('blog/single',[
		'blog' => $nilai, 
		'users' => $users,
		'unescaped' => $unescaped,
		
		]);
	} */
	
	/* //menggunakan Database
	public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		// $user = 'Riventus AHA';
		
		$users = DB::table('users')->get();
		//untuk debugging
		// dd($users);
		
		$unescaped = '<script>confirm("HAHA!");</script>';
		return view('blog/single',[
		'blog' => $nilai, 
		'users' => $users,
		'unescaped' => $unescaped,
		
		]);
	} */
	
	//menggunakan Insert ke Database
	/* public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		// $user = 'Riventus AHA';
		
		//untuk query where clause
		// $users = DB::table('users')
		// ->where('username','riventus')->get();
		//untuk query where clause dengan kemiripan ada huruf i
		// $users = DB::table('users')
		// ->where('username','like','%i%')->get();
		
		//insert data untuk multiple data
		DB::table('users')->insert([
			['username' => 'testing151',
			'password' => '1o230'],
			['username' => 'testing15211',
			'password' => 'ko124']
		]);
		$users = DB::table('users')->get();
		return view('blog/single',[
		'blog' => $nilai, 
		'users' => $users,
		// 'unescaped' => $unescaped,
		
		]);
	} */
	
	//menggunakan Update ke Database
	/* public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		
		//Update data
		DB::table('users')
		->where('username','Riventus')
		->update([
			'username' => 'RiventusAHA'
		]);
		
		$users = DB::table('users')->get();
		return view('blog/single',[
		'blog' => $nilai, 
		'users' => $users
		]);
	} */
	
	//menggunakan Delete ke Database
	/* public function show($id){
		$nilai = 'Ini adalah nilai ' . $id;
		
		//Update data
		DB::table('users')->where('id','>',5)->delete();
		
		$users = DB::table('users')->get();
		return view('blog/single',[
		'blog' => $nilai, 
		'users' => $users
		]);
	} */
	
	//Mengambil data pada tabel blogs
	public function show($id){
		
		//mengambil data dari table blogs di database sekarang dengan metode find()
		$blog = Blog::find($id);	
		
		return view('blog/singleblog',[
		'blog' => $blog
		]);
	}
}

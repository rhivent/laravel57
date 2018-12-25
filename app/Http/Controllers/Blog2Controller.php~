<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Blog2;
use App\Http\Requests;
use App\Mail\BlogPosted;

class Blog2Controller extends Controller
{
    public function index(){
	
		$blogs = Blog2::paginate(5);
		return view('/blog/home2',[
			'blogs' => $blogs
		]);
	}
	
	public function show($id){
		
		$blog = Blog2::find($id);	
		
		if(!$blog) abort(404);
		
		
		return view('blog/singleblog2',[
		'blog' => $blog
		]);
	}
	
	public function create(){
		return view ('blog/create');
	}
	
	public function store(Request $request){
		/* validation untuk form cek di https://laravel.com/docs/5.7/validation#available-validation-rules 
		validation ini dibuat dengan fungsi validate dengan parameter $request sebagai pertama, yang berisi rules/aturan2 dalam validasi pada form yang diisi oleh 
		
		validasi file dengan ukuran max: 300 (dlm Kb)
		
		*/
		$this->validate($request,[
			'title' 	  => 'required|min:5',
			'description' => 'required|min:5|max:30',
			'featured_img' => 'mimes:jpeg,bmp,gif,png,jpg|max:300'
		]);
		
		/* upload gambar file 
		menggunakan metode file dengan name pada view dan di upload dengan metode store dengan parameter nama_folder utk menyimpan hasil upload-an. Memakai metode storeAs jika ingin namanya sesuai keinginan dengan minimal 2 paramater yaitu folder upload dan nama unique seperti ditambah time() dan id user
		*/
		// $request->file('featured_img')->store('blog');
		$fileName = time() . ".png";
		$request->file('featured_img')->storeAs('public/blog', $fileName);
		// dd('done!');
		
		$blog = new Blog2;
		$blog->title			= $request->title;
		$blog->description 		= $request->description;
		$blog->featured_img 	= $fileName;
		$blog->save();
		
		//ngirim email
		Mail::to('test@emailuser.com')->send(new BlogPosted($blog));
		
		
		return redirect('/blog/blog2');
		// return redirect()->route('test');
	}
	
	public function edit($id){
		$blog = Blog2::find($id);
		
		if (!$blog) 
			abort(404);
		
		return view ('blog/edit',['blog' => $blog]);
	}
	
	//Class Request diambil oleh variabel $request untuk mengambil input2 dari usernya.
	public function update(Request $request,$id){
		// dd($request);
		// dd($id);
		
		// $request->title ini adalah yang user masukkan, sedangkan $blog->title yg dimasukkan ke database 
		$blog = Blog2::find($id);
		$blog->title 		= $request->title;
		$blog->description	= $request->description;
		$blog->save();
		
		// dd('success!');
		return redirect('/blog/blog2/'.$id);
	}
	
	public function destroy($id){
		$blog = Blog2::find($id);
		$blog->delete();
		
		return redirect('/blog/blog2');
	}
	
	public function testing(Request $request){
		if(
		// $request->method() == "GET"
		$request->isMethod("GET")
		){
			dd('ini adalah GET');
		}else{
			dd('ini adalah POST');
		}
	}
}
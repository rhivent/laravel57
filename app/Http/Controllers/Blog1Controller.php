<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog1;

class Blog1Controller extends Controller
{
    public function index(){
		//insert biasa 
		// dijelasin methode satu-satu yang mau dipakai sehingga simple juga
		// $blogs = new Blog1;
		// $blogs->title = 'Halo Mr. Riventus';
		// $blogs->description = 'Sekarang waktunya makan siang';
		// $blogs->save();
		
		// insert dengan mass-assignment
		/* cara penulisan yang lebih simple kita bisa memasukkan semuanya di satu property langsung tetapi dengan notice atau warning sehingga didalam array tinggal menulis key dan valuenya */
		
		// Blog1::create([
			// 'title' => 'Halo kmu',
			// 'description' => 'Sekarang waktunya makan Malam'
		// ]);
		
		//update
		// $blog = Blog1::where('title','halo kmu')->first();
		
		// $blog->title = 'Halo AKU';
		// $blog->save();
		/* jadi pada insert kita harus instace pada class untuk dijadikan object kemudian memasukkan data tetapi untuk update kita harus memilih dulu data yang mana diupdate kemudian baru dimasukkan datanya. Sama seperti insert, Update juga memiliki mass-assignment */
		
		//update mass-assignment
		/* Blog1::find(6)->update([
			'title' => 'Halo WAOWE',
			'description' => 'LOREMMEREREJIJRIEJ'
		]);
		 */
		
		//delete biasa
		/* $blog = Blog1::find(6);
		$blog->delete();
		 */
		
		//delete kedua
		// Blog1::destroy(5);
		// Blog1::destroy([2,3]); //untuk destroy lebih dari 1 
		
		
		//Soft Deletes
		/* soft deletes ini artinya kita menghapus tetapi kita tidak menghapus. Jadi di kolom database dibuat satu kolom baru yaitu deleted_at(TIMESTAMP). Nanti mendelete tidak benar-benar delete data di database sehingga kita hanya menaruh tanggal yang ada di dalam database sehingga nanti ketika dipanggil querynya nanti tidak akan di tampilkan ke user/client. 
		HARUS menggunakan class SoftDeletes di dalam model 
		dan membuat variabel untuk menampung delete ini */
		
		/* intinya seperti wordpress: setiap kontent tidak benar-benar hilang hanya di simpan di folder lain seperti trash atau spam dan kita bisa membalikkan/restore jika kita ingin melakukannya lagi. */
		// $blog = Blog1::find(7);
		// $blog->delete();
		
		/* untuk melihat semua data termasuk yang sudah di hidden maka menggunakan methode withTrashed()->get(); 
		
		Jika menggunakan methode all yang dihapus dengan soft delete tidak akan muncul*/
		
		// $blogs = Blog1::withTrashed()->get();
		
		/*  untuk membalikkan/return data softdelete maka method restore dengan mengambil data atau mencari data semua dahulu kemudian baru direstore*/
		// Blog1::withTrashed()->restore();
		
		$blogs = Blog1::all();
		return view('/blog/home',[
			'blogs' => $blogs
		]);
	}
	
	public function show($id){
		
		$blog = Blog1::find($id);	
		
		//untuk error tidak ada id yang di cari pada url maka
		if(!$blog){
			/* metode abort akan mengarah kepada file yang ada di view/errors dengan nama 404.blade.php dibuat secara manual baik folder maupun file
			jadi jika ingin tampilan file 403, 503, 500, dll buat halaman sendiri sesuai dengan keinginan.

			*/
			// abort(404);
			
			// dd('Not Found!');
		}
		
		return view('blog/singleblog',[
		'blog' => $blog
		]);
	}
}

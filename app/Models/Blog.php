<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /* FYI nama konvensional dari table di database akan berhubungan dengan nama kelas di model dimana nama tablenya yaitu plural(majemuk) dari nama kelas 
	contohnya : jika nama class Blog maka nama table yg di cari laravel adalah blogs
	
	jika tidak ingin membuat hal ini secara default maka harus menginisiasi nama table kita dengan ditampung dalam suatu variabel dengan visibility protected, contohnya:
	
	protected $table = 'namatabel';
	
	jika memakai nama konvensional maka tidak perlu mendefinisikan nama tabel jika sudah plural dari nama classnya.
	*/
	
	/* Secara default juga laravel menggunakan kolom created_at dan updated_at untuk variabel $timestamps() jika pada saat melakukan migrasi tidak ingin ada kolom ini maka 
	public $timestamps = false;
	*/
	
	public $timestamps = false;
}

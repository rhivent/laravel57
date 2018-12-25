<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog1 extends Model
{
	protected $table = 'blogs';
	
	use SoftDeletes;
	protected $delete = ['deleted_at'];
	
	// public $timestamps = false;
	
	protected $fillable = ['title','description'];
	// protected $guarded = ['created_at'];
}

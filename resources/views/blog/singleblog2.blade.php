@extends('layouts.master')

@section('title','Riventus Blog')
		
@section('content')
	<h1>SELAMAT DATANG Di BLOG KAMI</h1>
	
	<!-- penampilan dari folder storage harus di jembatani, karena tidak punya akses langsung ke folder storage sehingg kita harus buat akses dr folder public dan folder storage yaitu dengan nama storage:link pada artisan 
	
	php artisan storage:link
	-->
	<img src="{{ asset('storage/blog/' . $blog->featured_img) }}" alt="image" width="150" align="left" />
	<br/><br/>
	<h2>{{ $blog->title }}</h2>
	<hr>
	<p>
		{{ $blog->description }}
	</p>
@endsection
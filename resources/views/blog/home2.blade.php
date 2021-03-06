@extends('layouts.master')

@section('title','Riventus Blog')

	@section('content')
	<h1>SELAMAT DATANG Di BLOG KAMI</h1>
	<p>This is my blog made by Riventus</p>
<hr/>
		@foreach ($blogs as $blog)
			<li>
				<a href="/blog/blog2/{{ $blog->id }}">{{ $blog->title }}</a>
				
				<form name="" action="/blog2/{{ $blog->id }}" method="post">
				
					<input type="submit" name="submit" value="Delete">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="DELETE">
				</form>
			</li>
		@endforeach
		<!--metode appends() digunakan untuk memberi parameter untuk filter untuk hal-hal seperti categori apa dll. Jadi ini untuk menambahkan appends atau query dalam url sehingga ketika dipindah halaman lain maka tidak akan hilang querynya 
		http://localhost:12/blog2?cat=html&page=6-->
		{{ $blogs->appends(Request::input())->render() }}
		
	@endsection
	
	
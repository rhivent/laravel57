@extends('layouts.master')

@section('title','Riventus Blog')

	@section('content')
	<h1>SELAMAT DATANG Di BLOG KAMI</h1>
<hr/>
		@foreach ($blogs as $blog)
			<li><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></li>
		@endforeach
	
	
	@endsection
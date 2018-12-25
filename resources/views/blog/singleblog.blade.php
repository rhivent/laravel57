@extends('layouts.master')

@section('title','Riventus Blog')
		
@section('content')
	<h1>SELAMAT DATANG Di BLOG KAMI</h1>
	<h2>{{ $blog->title }}</h2>
	<hr>
	<p>
		{{ $blog->description }}
	</p>
@endsection
@extends('layouts.master')

@section('title','Riventus Blog')
		
@section('content')
	<h1>Edit Di BLOG KAMI</h1>
	<form name="" action="/blog/blog2/{{ $blog->id }}" method="post">
		<input type="text" name="title" value="{{ $blog->title}}">
		<br/>
		<textarea name="description" rows="8" cols="40">{{ $blog->description}}</textarea><br/>
		
		<!-- csrf security adalah untuk mencegah user mengisi form dari halaman atau website lain. Cara memperbolehkan hal ini yaitu dengan csrf_field() sehingga akan terbentuk inpt type hidden dengan name _token dan value uniqe precission dengan nilai yang sama saat login-->
		
		<input type="submit" name="submit" value="edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
	</form>
	
@endsection
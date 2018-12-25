@extends('layouts.master')

@section('title','Riventus Blog')
		
@section('content')
	<h1>Create Di BLOG KAMI</h1>
	@if(count($errors) > 0)
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	@endif
	
	<!--
	Jika ingin menampilkan error validasi di samping input maka boleh diberikan tag <p> atau tag <span> disamping tag input untuk validasi. 
	
	sedangkan methode old() pada sistem templating ini dibuat untuk saat user sudah menulis panjang2 dan di validasi salah maka nilai yg divalidasi user tidak akan diclear saat autoreload tetapi akan tetap ditampilkan
	
	enctype="multipart/form-data utk memperbolehkan upload file gambar
	-->
	<form name="" action="/blog/blog2" method="post" enctype="multipart/form-data">
		<input type="text" name="title" value="{{ old('title') }}">
		
			@if($errors->has('title'))
			<p> Ada errors pada title {{ $errors->first('title')}}</p>	
			@endif
			<br/>
		<textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea>
			@if($errors->has('description'))
			<p> Ada errors pada title {{ $errors->first('description')}}</p>	
			@endif
		<br/>
		Featured Image
		<input type="file" name="featured_img" value="{{ old('featured_img') }}">
			@if($errors->has('featured_img'))
			<p> Ada errors pada title {{ $errors->first('featured_img')}}</p>	
			@endif
		<br/>
		<!-- csrf security adalah untuk mencegah user mengisi form dari halaman atau website lain. Cara memperbolehkan hal ini yaitu dengan csrf_field() sehingga akan terbentuk inpt type hidden dengan name _token dan value uniqe precission dengan nilai yang sama saat login-->
		
		<input type="submit" name="submit" value="Create">
		{{ csrf_field() }}
	</form>
	
@endsection
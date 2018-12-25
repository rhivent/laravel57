@extends('layouts.master')

@section('title','Riventus Blog')
		
@section('content')
	<h1>SELAMAT DATANG Di BLOG KAMI</h1>
	<h2>{{$blog}}</h2>
	<!--<h2></h2>-->
	@foreach ($users as $userx)
		<li>{{ $userx->username . ' passwordnya : ' . $userx->password}}</li>
	@endforeach
	
	{{--$unescaped--}}
	
	
	@if(count($users)> 5)
		<p>User lebih dari lima</p>
	@else
		<p>User tidak lebih dari lima</p>
	@endif
	
@endsection
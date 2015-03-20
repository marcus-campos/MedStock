@extends('layout')

@section('content')
	
	 @if(Session::has('mensagem'))
		{{Session::get('mensagem')}}
	@endif 
@stop
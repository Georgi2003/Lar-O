@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "./register"> 
    	{{csrf_field()}}
		<input type = "text" name = "first_name" placeholder = "Въведете име">
		<br>
		<input type = "text" name = "last_name" placeholder = "Въведете фамилия">
		<br>
		<input type = "submit" name = "submit">	
	</form>
@endsection
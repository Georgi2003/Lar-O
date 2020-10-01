@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method = "POST" action = "./login"> 	  			
		{{csrf_field()}}
		<input type = "text" name = "username" placeholder = "Потребителско име">
		<br>
		<input type = "password" name = "password" placeholder = "Парола"> 	
		<br>	 	
		<input type = "submit" name = "submit">
	 	<br>
	</form>
@endsection
 
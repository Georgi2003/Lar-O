@extends('layout.default')

@section('title', 'Employees')

@section('log')
<table style="border:1px solid black">
	<thead>
		<tr>
			<th>Име</th>
			<th>Телефон</th>
			<th>Адрес</th>
			<th>Длъжност</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allEmployees as $employee)
		<tr>
			<td>{{$employee->first_name}} {{$employee->last_name}}</td>
			<td>{{$employee->phone}}</td>
			<td></td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
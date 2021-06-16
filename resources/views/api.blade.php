@extends('menu')

@section('title','Air Control Traffic')

@section('content')
	<form method="POST" action="{{ route('api') }}">
		@csrf <!--token-->
		<select name="type" required>
			<option value="">Type...</option>
			<option value="1">Emergency</option>
			<option value="2">VIP</option>
			<option value="3">Passenger</option>
			<option value="4">Cargo</option>
		</select>
		<br>
		{!! $errors->first('type','<small>:message</small><br>') !!}
		<select name="size" required>
			<option value="">Size...</option>
			<option value="big">Big</option>
			<option value="small">Small</option>
		</select>
		<br>
		{!! $errors->first('size','<small>:message</small><br>') !!}
		<button>Send</button>
	</form>	

	<table border="1">
		<tr>
			<th>ID</th>
			<th>TYPE</th>
			<th>SIZE</th>
			<th>DATE CREATED</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@forelse($traffic as $trafficItem)
			<tr>
				<td> {{ $trafficItem->id }} </td>	
				<td> {{ $trafficItem->type }}</td>	 
				<td> {{ $trafficItem->size }} </td>	
				<td> {{ $trafficItem->date_created }} </td>	
				<td> <a href="{{ route ('show', $trafficItem->id) }}"> edit </a> </td>	
				<td> <a href="{{ route ('delete', $trafficItem->id) }}"> delete </a> </td>
			</tr>
		@empty
			No records
		@endforelse
	</table>
@endsection
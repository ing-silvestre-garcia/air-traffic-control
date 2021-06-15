@extends('menu')

@section('title','Air Control Traffic')

@section('content')
	<form method="POST" action="{{ route('update',$traffic) }}">
		@csrf <!--token-->
		@method('PATCH')

		@forelse($traffic as $trafficItem)
			{{ $id = $trafficItem->id }}
			{{ $type = $trafficItem->type }}
			{{ $size = $trafficItem->size }}
			{{ $date_created = $trafficItem->date_created }}
		@empty
			No records
		@endforelse
		
		<select name="type" required>
			<option @if($type == 1) ? 'selected' : '' @endif  value="1">Emergency</option>
			<option @if($type == 2) ? 'selected' : '' @endif value="2">VIP</option>
			<option @if($type == 3) ? 'selected' : '' @endif value="3">Passenger</option>
			<option @if($type == 4) ? 'selected' : '' @endif value="4">Cargo</option>
		</select>
		<br>
		{!! $errors->first('type','<small>:message</small><br>') !!}
		<select name="size" required>
			<option @if($size == 'big') ? 'selected' : '' @endif value="big">Big</option>
			<option @if($size == 'small') ? 'selected' : '' @endif value="small">Small</option>
		</select>
		<br>
		{!! $errors->first('size','<small>:message</small><br>') !!}
		<button>Update</button>
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
		
	</table>
@endsection
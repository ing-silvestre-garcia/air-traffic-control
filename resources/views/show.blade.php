@extends('menu')

@section('title','Air Control Traffic')

@section('content')
	<form method="POST" action="{{ route('update',$traffic[0]->id) }}">
		@csrf <!--token-->
		@method('PATCH')


		
		<select name="type" required>
			<option @if($traffic[0]->type == 1) ? 'selected' : '' @endif  value="1">Emergency</option>
			<option @if($traffic[0]->type == 2) ? 'selected' : '' @endif value="2">VIP</option>
			<option @if($traffic[0]->type == 3) ? 'selected' : '' @endif value="3">Passenger</option>
			<option @if($traffic[0]->type == 4) ? 'selected' : '' @endif value="4">Cargo</option>
		</select>
		<br>
		{!! $errors->first('type','<small>:message</small><br>') !!}
		<select name="size" required>
			<option @if($traffic[0]->size == 'big') ? 'selected' : '' @endif value="big">Big</option>
			<option @if($traffic[0]->size == 'small') ? 'selected' : '' @endif value="small">Small</option>
		</select>
		<br>
		{!! $errors->first('size','<small>:message</small><br>') !!}
		<button>Update</button>
	</form>	
@endsection
@extends('menu')

@section('title','Air Control Traffic')

@section('content')
	<form method="POST" action="{{ route('destroy',$traffic[0]->id) }}">
		@csrf <!--token-->
		@method('DELETE')


		
		<text name="type" value="{{ $traffic[0]->type }}"/>
		<br>
		<text name="size" value="{{ $traffic[0]->size }}"/>
		
		<br>

		<button>Delete</button>
	</form>	
@endsection
@extends('layout')
@section('content')

<h2>{{$card->title}}</h2>

<br/>
Listing Of Notes 
<ul>
@foreach($notes as $element)
	<li>{{$element->note}}</li>
@endforeach
</ul>	
<br/>

<h2>Add New Note</h2>

<form method="POST" action="/card/{{$card->id}}/note">
	<div>
		<textarea name="note"></textarea>
	</div>
	<div>
		<input type="submit" value="Submit">
	</div>
</form>	

@if(count($errors))

	<ul>
	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
@stop
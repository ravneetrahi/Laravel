@extends('layout')
@section('content')
<h1>Cards</h1>
<ul>
@foreach($cards as $card)
	<li><a href="/card/{{$card->id}}">{{$card->title}}</a>
	<p>{{$card->description}}</p>
	</li>
@endforeach
</ul>	
<br/>
<br/>

<h3>Add Card</h3>
<form method="POST" action="/card">
	<div>
		<input type="text" name="title" placeholder="Title" value="{{old('title')}}">		
	</div>
	<div>
		<textarea name="description"  placeholder="Description"></textarea>
	</div>
	<div>
		<input type="submit" value="Add New Card">
	</div>
</form>	
@if(count($errors))
	<div >
	<ul>
	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif	
@stop
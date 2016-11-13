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
	<div class="form-group">
		<input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">		
	</div>
	<div class="form-group">
		<textarea name="description" class="form-control mb10" placeholder="Description"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Add New Card">
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
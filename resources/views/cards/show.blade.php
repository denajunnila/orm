@extends('layout')
@section('title')
	This is the cards page
@endsection

@section('content')
	<pre>
	<?php print_r($card); ?>
	</pre>
	<h1> This is the single Page</h1>
	<h3>
		{{ $card->title }} 
	</h3>
	<div>
	Card Id: {{ $card->id }}: 
	</div>
	<ul>
		@foreach($card->notes as $note)
			<li> {{$note->body}}</li>
		@endforeach
		
	</ul>
@endsection
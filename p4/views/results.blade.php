@extends('templates.master')

@section('title')
Past Game Results
@endsection

@section('content')

<h2>PAST GAME RESUTLS</h2>

@foreach($results as $result)
<li> {{ $result['name'] }}</li>
@endforeach

<div>
    <a href='/index'>Return to play the game!</a>
</div>

@endsection
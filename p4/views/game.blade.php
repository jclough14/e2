@extends('templates.master')

@section('title')
Inidivdual Game Result
@endsection

@section('content')

<h2>GAME RESULT</h2>
<div>
    <a href='/'>Return to play the game!</a>
</div>

@if($name)
        Your game {{  $name }}was added
    @endif

@endsection
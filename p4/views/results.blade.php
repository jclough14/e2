@extends('templates.master')

@section('title')
Past Game Results
@endsection

@section('content')


@if($app->old('gameNotFound'))
<div class='alert alert-warning'>
Sorry - the game is not available!
</div>
@endif


<h2>PAST GAME RESUTLS</h2>

<ul>
    @foreach($results as $result)
    <li> <a href='/result?id={{  $result['id']  }}'>{{ $result['name'] }}</li></a>
    @endforeach
</ul>

<div>
    <a href='/'>Return to play the game!</a>
 
</div>

@endsection
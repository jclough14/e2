@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<h2>Take your turn at this classic game!</h2>

<h3>Rules</h3>

<p>You and your opponent secretly choose a shape. <br>
    Show your shape to the opponent at the same time. <br>
    Rock beats scissors, scissors beats paper, paper beats rock. <br>
    <a href='https://www.wrpsa.com/the-official-rules-of-rock-paper-scissors/'> Official Rules</a>.
</p>
<h2>Play the Game!</h2>

<form method='POST' action='/new-game'>

    <div class='form-group'>
        <label>Enter your name: <input type='text' name='name' value='{{ $app->old('name') }}'></label>
    </div>

    <h4> Choose your shape!</h4>

   <div class='form-group'>
        <label for='Rock'><input type='radio' name='player_shape' value='Rock' id='Rock'> Rock</label>

        <label for='Paper'><input type='radio' name='player_shape' value='Paper' id='Paper'> Paper</label>

        <label for='Scissors'><input type='radio' name='player_shape' value='Scissors' id='Scissors'> Scissors</label>
    </div>

    <div class='form-group'>
        <button type='submit' class='btn btn-primary'>Play!</button>
    </div>
</form>

<div>
    <a href='/results'>Past game results</a>
</div>

@endsection
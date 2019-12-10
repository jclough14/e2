@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

<h2>Take your turn at this classic game!</h2>

<h3>Rules</h3>

<p>You and your opponent secretly choose a shape. <br>
    Show your shape to the opponent at the same time. <br>
    Rock beats scissors, scissors beats paper, paper beats rock. <br>
    <a href='https://www.wrpsa.com/the-official-rules-of-rock-paper-scissors/'> Official Rules</a>.
</p>
<h2>Play the Game!</h2>

<form action='/play' method='POST'>

    <div class='form-group'>
        <label>Enter your name: <input type='text'></label>
    </div>

    <h4> Choose your shape!</h4>

    <div class='form-group'>
        <label for='rock'><input type='radio' name='choice' value='rock' id='rock'> Rock</label>

        <label for='paper'><input type='radio' name='choice' value='paper' id='paper'> Paper</label>

        <label for='scissors'><input type='radio' name='choice' value='scissors' id='scissors'> Scissors</label>
    </div>

    <div class='form-group'>
        <button type='submit' class='btn btn-primary'>Play!</button>
    </div>
</form>

<div>
    <a href='/results'>Past game results</a>
</div>

@endsection
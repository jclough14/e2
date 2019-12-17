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


<h2>PAST GAME RESULTS</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Game #</th>
      <th scope="col">Player Name</th>
      <th scope="col">Player Shape</th>
      <th scope="col">Computer Shape</th>
      <th scope="col">Winner</th>
    </tr>
  </thead>
  <tbody>
        
    @foreach($results as $result)
    <tr>
        <td><a href='/result?id={{  $result['id']  }}'>{{  $result['id']  }}</a></td>
        <td>{{  $result['name']  }}</td>
        <td>{{  $result['player_shape']  }}</td>
        <td>{{  $result['cpu_shape']  }}</td>
        <td>{{  $result['winner']  }}</td> 
    </tr>
    @endforeach
     
    </tbody>
</table>

<div>
    <a href='/'>Return to play the game!</a>
</div>

@endsection
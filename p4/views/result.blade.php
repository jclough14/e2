@extends('templates.master')

@section('title')
Game {{  $result['id']  }} Result
@endsection

@section('content')

<h2>Game {{  $result['id']  }} Result</h2>

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
        <tr>
        <th scope="row">{{  $result['id']  }}</th>
        <td>{{  $result['name']  }}</td>
        <td>{{  $result['player_shape']  }}</td>
        <td>{{  $result['cpu_shape']  }}</td>
        <td>{{  $result['winner']  }}<tr>
        </tr>
    </tbody>
</table>
<div>

<div>
    <a href='/results'>Return to past game results</a>
</div>
<br>
<div>
    <a href='/'>Return to play again!</a>
</div>
@endsection


@extends('templates.master')

@section('title')
Inidivdual Game Result
@endsection

@section('content')

<h2>GAME RESULT</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Player Name</th>
      <th scope="col">Player Shape</th>
      <th scope="col">Computer Shape</th>
      <th scope="col">Winner</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        <td scope="row">{{  $name  }}</td>
        <td>{{ $player_shape  }}</td>
        <td>{{  $cpu_shape  }}</td>
        <td>{{  $winner  }}</td>
    </tbody>
</table>

<div>
    <a href='/'>Return to play again!</a>
</div>

@endsection
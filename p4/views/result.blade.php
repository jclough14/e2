@extends('templates.master')

@section('title')
Old Game Result
@endsection

@section('content')

<h2>Old Game Result</h2>

Namem {{  $result['name']  }}
Shape {{  $result['player_shape']  }}
<div>
    <a href='/results'>Return to past game results</a>
</div>



@endsection
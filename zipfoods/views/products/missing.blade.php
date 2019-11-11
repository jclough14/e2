@extends('templates.master')

@section('title')

@endsection

@section('content')
<div id='product-show'>
    <h2> Product {{ $id }} not found</h2>

    <p> Uh oh - we were not able to find the product you were looking for.</p>

    <a href='/products'>&larr; Check out our other products</a>
    @endsection
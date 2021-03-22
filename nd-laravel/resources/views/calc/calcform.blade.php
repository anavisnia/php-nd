@extends('layout.main')
@section('title') Calculator V3 @endsection
@section('hero')
<h1 class="hero">Let's calculate! V3</h1>
<div class="hero">
    <form action="{{route('do-math')}}" method="POST">

        X: <input type=text; name="x">
        Action: <input type="text" name="distribution">
        Y: <input type=text; name="y">
        <button type="submit">Calc</button>
        <p>{{$r}}</p>
        @csrf
    </form>
</div>
@endsection

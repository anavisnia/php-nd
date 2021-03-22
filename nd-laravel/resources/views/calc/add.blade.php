@extends('layout.main')
@section('title') Calculator V2 @endsection
@section('hero')
<h1 class="hero">Let's calculate!</h1>
<div class="hero">
    <p>Your chosen method: addition</p>
    <p>Your chosen numbers are <span class="numColor">{{ $firstNum }}</span> and <span class="numColor">{{$secNum}}</span></p>
    <p>Answer: <span class="numColor">{{$answer}}</span></p>
</div>
@endsection

@extends('layout.main')
@section('title') Calculator @endsection
@section('hero')
<h1 style="width:100%;text-align:center;font-size:35px;color:blue;margin-top:240px">Let's calculate!</h1>
<div style="width:100%;text-align:center;font-size:28px;">
    <p>Your chosen method: {{ $op }}</p>
    <p>Your chosen numbers are <span style="color:blue;">{{ $firstNum }}</span> and <span style="color:blue;">{{$secNum}}</span></p>
    <p>Answer: <span style="color:blue;">{{$answer}}</span></p>
</div>
@endsection

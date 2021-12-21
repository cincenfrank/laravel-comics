@php
$comic = config('comics')[$id]
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">
        <div>
            <h1>{{$comic["title"]}}</h1>
            <p>{{$comic["description"]}}</p>
        </div>
        <div>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection

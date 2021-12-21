@extends('layouts.default')
@section('page_title', 'Homepage')
@section('content')
<div class="page-content bg-dark">
    <div class="container">
        <div class="row row-cols-6">
            @foreach (config('comics') as $index=>$item)
            @php
            $item["id"]=$index
            @endphp
            <div class="col">
                @component('components.comic_card')
                @slot('image_path')
                {{$item["thumb"]}}
                @endslot
                @slot('image_description')
                {{$item["title"] . " thumb"}}
                @endslot
                @slot('image_title')
                {{$item["title"]}}
                @endslot
                @slot('image_id')
                {{$item["id"]}}
                @endslot
                @endcomponent
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

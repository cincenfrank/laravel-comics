@extends('layouts.default')
@section('page_title', 'Homepage')
@section('content')
<div class="page-content bg-dark">
    <div class="container">
        <div class="row row-cols-6">
            @foreach (config('comics') as $item)
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
                @endcomponent
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

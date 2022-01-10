@extends('layouts.default')
@section('page_title', 'Homepage')
@section('content')
<div class="page-content bg-dark">
    <div class="container position-relative">

        <h4 class=" bg-info p-3 d-inline-block text-light bold mb-3 translate-middle-y ">CURRENT SERIES</h4>
        <div class="overflow-hidden">
            <div class="row row-cols-6  gy-5">
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

@extends('master')

@section('title')
    <title>A</title>
@endsection

@section('content')
    <div class="mx-auto container px-3 max-w-lg mb-4">
        <div data-controller="slideshow" data-turbolinks-permanent>
            <div class="flex items-center">
                <button class="py-1 px-2 mx-3 bg-white rounded-sm shadow" data-action="slideshow#previous">←</button>
                <div data-target="slideshow.slide" class="slide mx-3 text-5xl">🙉</div>
                <div data-target="slideshow.slide" class="slide mx-3 text-5xl">🙈</div>
                <div data-target="slideshow.slide" class="slide mx-3 text-5xl">🙊</div>
                <div data-target="slideshow.slide" class="slide mx-3 text-5xl">🐵</div>
                <button class="py-1 px-2 mx-3 bg-white rounded-sm shadow" data-action="slideshow#next">→</button>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .slide {
            display: none;
        }

        .slide.slide--current {
            display: block;
        }
    </style>
@endpush
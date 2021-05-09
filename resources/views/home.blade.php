@extends('layout')

@section('title')
    Home page
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="css/splide.css">
@endsection

@section('content')
    <div id="1" class="banner flex justify-center my-10">

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @if(!isset($images[0]))
                        <li class="splide__slide">
                            <img src="img/image-placeholder.jpg">
                        </li>
                    @else
                        @foreach($images[0] as $image)
                            <li class="splide__slide">
                                <a id="1" href="{{ $image->url }}" target="{{ $image->url_target }}"
                                   onclick="trackClick(this)">
                                    <img src="storage/files/images/{{ $image->file_path }}">
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>

    </div>

    <div class="flex justify-center">
        <p class="w-1/4 m-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <div id="2" class="banner">
            @if(!isset($images[1]))
                <img class="w-60 h-90 m-4"
                     src="img/image-placeholder.jpg">
            @else
                <a id="2" href="{{ $images[1]->first()->url }}" target="{{ $images[1]->first()->url_target }}"
                   onclick="trackClick(this)">
                    <img class="w-60 h-90 m-4"
                         src="storage/files/images/{{ $images[1][rand(0, count($images[1]) - 1)]->file_path }}">
                </a>
            @endif
        </div>

    </div>

    <div class="flex justify-center mb-20">

        <div id="3" class="banner">
            @if(!isset($images[2]))
                <img class="w-60 m-4" src="img/image-placeholder.jpg">
            @else
                <a id="3" href="{{ $images[2]->first()->url }}" target="{{ $images[2]->first()->url_target }}"
                   onclick="trackClick(this)">
                    <img class="w-60 m-4"
                         src="storage/files/images/{{ $images[2][rand(0, count($images[2]) - 1)]->file_path }}">
                </a>
            @endif
        </div>

        <div id="4" class="banner">
            @if(!isset($images[3]))
                <img class="w-60 m-4" src="img/image-placeholder.jpg">
            @else
                <a id="4" href="{{ $images[3]->first()->url }}" target="{{ $images[3]->first()->url_target }}"
                   onclick="trackClick(this)">
                    <img class="w-60 m-4"
                         src="storage/files/images/{{ $images[3][rand(0, count($images[3]) - 1)]->file_path }}">
                </a>
            @endif
        </div>

        <div id="5" class="banner">
            @if(!isset($images[4]))
                <img class="w-60 m-4" src="img/image-placeholder.jpg">
            @else
                <a id="5" href="{{ $images[4]->first()->url }}" target="{{ $images[4]->first()->url_target }}"
                   onclick="trackClick(this)">
                    <img class="w-60 m-4"
                         src="storage/files/images/{{ $images[4][rand(0, count($images[4]) - 1)]->file_path }}">
                </a>
            @endif
        </div>

    </div>

@endsection

@section('scripts')
    <script src="js/splide.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://unpkg.com/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="js/viewCounter.js"></script>
    <script src="js/clickCounter.js"></script>
@endsection
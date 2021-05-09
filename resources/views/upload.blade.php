@extends('layout')

@section('title')
    Upload images
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="/css/dropzone.css">
@endsection

@section('content')

    @if(session()->has('message'))
        <div>
            <strong class="text-green-600 font-bold">Success!</strong>
            <span class="text-green-600">{{ session()->get('message') }}</span>
        </div>
    @endif

    <form class="ml-4" action="/upload" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="file" multiple>
        <strong class="text-red-600">{{ $errors->first('file') }}</strong>
        <br>

        Redirect to:
        <input class="shadow appearance-none border rounded py-2 px-3 border-transparent" type="text" name="url"
               value="{{ old('url') }}" placeholder="Enter URL">
        <br>
        <strong class="text-red-600">{{ $errors->first('url') }}</strong>
        <br>

        Redirect to a new window?
        <input type="radio" name="redirect" value="_blank" {{(old('redirect') == '_blank') ? 'checked' : ''}}> Yes
        <input type="radio" name="redirect" value="_self" {{(old('redirect') == '_self') ? 'checked' : ''}}> No
        <br>
        <strong class="text-red-600">{{ $errors->first('redirect') }}</strong>
        <br>

        Upload to banner
        <select name="banner">
            <option value="1" {{(old('banner') == '1') ? 'selected' : ''}}>1</option>
            <option value="2" {{(old('banner') == '2') ? 'selected' : ''}}>2</option>
            <option value="3" {{(old('banner') == '3') ? 'selected' : ''}}>3</option>
            <option value="4" {{(old('banner') == '4') ? 'selected' : ''}}>4</option>
            <option value="5" {{(old('banner') == '5') ? 'selected' : ''}}>5</option>
        </select>
        <br>

        <input class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 my-4 rounded" type="submit"
               value="Upload">

    </form>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/dropzone.js"></script>
@endsection
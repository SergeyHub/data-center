@extends('layouts.app')

@section('body-class', 'page-main')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/dc-map.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/mainpage.js') }}"></script>
@endsection

@section('content')
    @php($fields = json_decode($model->fields['builder'], true))

    @isset ($model->fields['builder'])
        @foreach ($fields as $field)
            @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
        @endforeach
    @endisset

@endsection

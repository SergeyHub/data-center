@extends('layouts.app')

@section('body-class', 'page-cod')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/cod.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/dc-map.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/cod.js') }}"></script>
@endsection

@section('content')

    @include('blocks.header-title-cod', [
        'title' => __('content.Услуги ЦОД')
    ])

    <div class="container">
        @if(is_string($model->fields['builder']))
            @php($fields = json_decode($model->fields['builder'], true))
        @else
            @php($fields = $model->fields['builder'])
        @endif

        @foreach ($fields as $field)
            @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
        @endforeach
    </div>

@endsection

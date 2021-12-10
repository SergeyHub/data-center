@extends('layouts.app')

@section('body-class', 'page-main')

@section('scripts')
    <script src="{{ mix('/js/about.js') }}"></script>
@endsection

@section('content')

    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    @include('blocks.header-title', [
        'title' => __('content.О нас'),
    ])


    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    @foreach($fields as $field)
        @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
    @endforeach

@endsection

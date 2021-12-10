@extends('layouts.app')

@section('body-class', 'page-default')

@section('content')
    @include('blocks.header-title', [
            'title' => $model->name_in_menu ?? $model->name,
            'breadcrumbs' => $model->getBreadcrumbs()
        ])
    @isset($model->fields['builder'])
        @if(is_string($model->fields['builder']))
            @php($fields = json_decode($model->fields['builder'], true))
        @else
            @php($fields = $model->fields['builder'])
        @endif

        @foreach($fields as $field)
            @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
        @endforeach
    @endisset

    {!! $model->content !!}

@endsection

@inject('newsRepository', 'App\Services\NewsRepository')
@extends('layouts.app')

@section('body-class', 'page-news')

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.Новости')
    ])

    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    @foreach($fields as $field)
        @include('blocks.' . $field['type'], ['content' => $field['content']])
    @endforeach

    @include('blocks.subscribe')
@endsection

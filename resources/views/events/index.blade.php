@inject('newsRepository', 'App\Services\NewsRepository')
@extends('layouts.app')

@section('body-class', 'page-events')

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.Наши мероприятия')
    ])

    @include('blocks.events-categories')
    @include('blocks.events')
    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    @foreach($fields as $field)
        @include('blocks.' . $field->type, ['content' => $field->content])
    @endforeach

@endsection

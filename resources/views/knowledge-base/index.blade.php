@extends('layouts.app')

@section('body-class', 'page-news')

@section('content')

    @include('blocks.header-title', [
        'title' => $model->name,
        'breadcrumbs' => [
            [
                'name' => 'Главная',
                'url' => '/'
            ],
            [
                'name' => $model->name,
                'url' => ''
            ]
        ]
    ])

    @include('blocks.knowledge-base', ['pages' => $pages])

@endsection

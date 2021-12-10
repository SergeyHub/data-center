@extends('layouts.app')

@section('body-class', 'page-main')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.Услуги')
    ])

    @include('blocks.categories', ['category' => $category ?? null])

    <div class="cards block">
        <div class="content">
            @if (!empty($category))
                <h2>{{ $category->name }}</h2>
            @endif
            <div class="cards__container">
                @if (!empty($category))
                    @foreach($category->services as $service)
                        @include('blocks.service_item', ['service' => $service])
                    @endforeach
                @else
                    @foreach($categories as $category)
                        @foreach($category->services as $service)
                            @include('blocks.service_item', ['service' => $service, 'category' => $category])
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('body-class', 'page-main')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.Результаты поиска')
    ])

    <div class="search-result">
        <div class="content">
            <h2>
                {{ __('content.Поиск') }}: <span class="query-sentence">«{{ $query }}»</span>
            </h2>
            @if (empty($urls))
                <p>{{ __('content.Ничего не найдено') }}</p>
            @else
                <ul class="search-result">
                    @foreach ($urls as $item)
                        <li>
                            {{ $loop->index + 1 }}. <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                            @if(isset($item['desc']))
                                <p style="font-size: 15px">{{$item['desc']}}</p>
                            @endif
                            @if(isset($item['cat_name']))
                                <p style="font-size: 13px"><a href="{{$item['cat_url']}}" style="color: #09408a; font-weight: bold;">{{$item['cat_name']}}</a></p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@endsection

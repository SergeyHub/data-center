@inject('viewHelper', 'App\Services\ViewHelper')
@extends('layouts.app')

@section('body-class', 'page-news-detailed')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/page-news-detailed.css') }}">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "url": "{{ url()->full() }}",
            "articleBody": "{{ $model->description }}",
            "headline": "{{ $model->name }}",
            "datePublished": "{{ $model->created_at->format('Y-m-d\TH:i:s.uP') }}",
            "dateModified": "{{ $model->updated_at->format('Y-m-d\TH:i:s.uP') }}"
        }
    </script>
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => $model->name,
        'subtitle' => __('content.Дата публикации') . ' - ' . $model->created_at->isoFormat('OD MMMM YYYY')
    ])

    <div class="container">
        <div class="news">
            @if (!empty($model->fields['builder']))
                @if(is_string($model->fields['builder']))
                    @php($fields = json_decode($model->fields['builder'], true))
                @else
                    @php($fields = $model->fields['builder'])
                @endif
                @foreach ($fields as $field)
                    @if($field['type'] == 'tinymce')
                        @include('blocks.' . $field['type'], ['content' => $viewHelper->setHrefToBlank($field['content']), 'background' => $field['background'] ?? ''])
                    @endif
                @endforeach
            @elseif(!empty($model->content))
                <div class="tinymce">
                    <div class="content">
                        {!! $viewHelper->setHrefToBlank($model->content) !!}
                    </div>
                </div>

            @endif
            @include('blocks.soc-share')
        </div>
    </div>
    @include('blocks.free-consultation')

    @include('blocks.news-last')
@endsection

@extends('layouts.app')

@section('body-class', 'page-smi')

@section('styles')

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
        'title' => $model->name
    ])

    @include('blocks.news-smi')
@endsection

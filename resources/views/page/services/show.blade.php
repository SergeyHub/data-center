@extends('layouts.app')

@section('body-class', 'page-service-item')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/page-service.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/service.js') }}"></script>
    <script src="{{ mix('/js/calculator.js') }}"></script>
@endsection

@section('content')
    @isset($model->fields['builder'])
        <div class="container">
            @if (is_string($model->fields['builder']))
                @php($fields = json_decode($model->fields['builder'], true))
            @else
                @php($fields = $model->fields['builder'])
            @endif
            @foreach ($fields as $field)
                @include('blocks.' . $field['type'], ['content' => $field['content'], 'title' => $field['title'] ?? '', 'background' => $field['background'] ?? '', 'model' => $model])
            @endforeach
        </div>
    @endisset
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "url": "{{ url()->full() }}",
            "articleBody": "",
            "author": "admindatacenter",
            "publisher": {
                "@context": "https://schema.org",
                "@type": "Organization",
                "url": "{{ url('/') }}",
                "name": "admindatacenter",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Moscow, Russia",
                    "postalCode": "127083",
                    "streetAddress": "8 Marta Street, Building 14, Construction 1"
                },
                "logo": {
                    "@context": "https://schema.org",
                    "@type": "ImageObject",
                    "contentUrl": "{{ url('/') . "/images/logo.svg" }}",
                    "url": {
                        "@context": "https://schema.org",
                        "@type": "Url"
                    }
                },
                "email": "info@admindatacenter.com"
            },
            "image": {
                "@context": "https://schema.org",
                "@type": "ImageObject",
                "contentUrl": "{{ url('/') . '/images/logo.svg' }}",
                "url": {
                    "@context": "https://schema.org",
                    "@type": "Url"
                }
            },
            "headline": "{{ $model->name }}",
            "datePublished": "{{ $model->created_at->format('Y-m-d\TH:i:s.uP') }}",
            "dateModified": "{{ $model->updated_at->format('Y-m-d\TH:i:s.uP') }}"
        }
    </script>
@endsection

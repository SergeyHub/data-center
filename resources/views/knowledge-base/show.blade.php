@extends('layouts.app')

@section('body-class', 'page-default')

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

    @php
        $pages = App\Models\KnowledgeBase::published()->with('translations')->where('parent_id', null)->orderBy('sort')->get()
    @endphp

    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    <div class="knowledge-base content">
        <ul class="knowledge-base__ul knowledge-base__ul_depth-0 knowledge-base__ul_open" data-id="{{ $model->id }}">
            @include('blocks.knowledge-base-submenu', ['pages' => $pages, 'depth' => 1, 'current_parents' => $model->getParents()])
        </ul>
        <article class="knowledge-base__article">
            <h2 itemprop="headline">{{ $model->name }}</h2>
            @foreach ($fields as $field)
                @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
            @endforeach
            <div itemprop="articleBody">
                {!! $model->content !!}
            </div>
        </article>
    </div>
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

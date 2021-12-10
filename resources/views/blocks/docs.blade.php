@inject('docsRepository', 'App\Services\DocsRepository')
@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/docs.css') }}">
@endsection
@section('scripts')
    @parent
    <script src="{{  mix('/js/docs.js') }}"></script>
@endsection
<div class="none">
    @include('blocks.docs-icon')
</div>
<div class="content docs">
    @foreach ($docsRepository->getCats(['contract','policies','contract2','definitions','csd','terms']) as $category)
        @if(count($docsRepository->getDocs($category->id)))
            <h2 id="{{ $category->code }}" class="docs__heading">{{ str_replace('Standart', 'Standard', $category->name) }}</h2>
            <div class="docs__row docs__{{ $category->code }}">
                @if($loop->last)
                    <div class="docs__row docs__row_one">
                        @endif
                        @foreach ($docsRepository->getDocs($category->id) as $document)
                            <div class="document">
                                <div class="document__row">
                                <div class="document__file document__file_{{ $category->code }}">
                                    <svg class="document__icon document__icon_pdf">
                                        <use xlink:href="#svg-icon-FileFormat_PDF"></use>
                                    </svg>
                                    <div class="document__text">
                                        @if($document->getFileSize() > 0)
                                            <a href="{{ $document->getUrl() }}" class="document__link" target="_blank">
                                                @endif
                                                {{ $document->name }}
                                                @if($document->getFileSize() > 0)
                                            </a>
                                        @endif
                                        @if($document->getFileSize() > 0)
                                            ({{ strtoupper($document->getFileExtension()) }}, {{ $document->getFileSize() }})
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="document__row">
                                <div class="document__description">{{$document->description ?? ""}}</div>
                            </div>
                            </div>
                        @endforeach
                        @if($loop->last)
                    </div>
                @endif
                @if($loop->last)
                    @include('blocks.docs.tell-us-form')
                @endif
            </div>
        @endif
    @endforeach
    @include('blocks.docs.tell-us-modal')
</div>

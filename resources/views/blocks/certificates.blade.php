@inject('certificateRepository', 'App\Services\CertificateRepository')
@inject('docsRepository', 'App\Services\DocsRepository')
@section('styles')
    <link rel="stylesheet" href="/css/certificates.css">
@endsection
<div class="content row js-animate certificates">
    @foreach ($docsRepository->getDocs(1) as $document)
        <div class="certificates__item">
            <div class="certificates__img">
                <a target="_blank" href="/storage{{ $document->file_path }}">
                    <img src="{{ $document->image['url'] }}">
                </a>
            </div>
            <div class="certificates__file">
                <div class="certificates__text">
                    {{ $document->name }}
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($certificateRepository->getAllCertificates() as $certificate)
        <div class="certificates__item {{ $certificate->class }}">
            <div class="certificates__img">
                @if (empty($certificate->url) && !empty($certificate->file_path ))
                    <a target="_blank" href="/storage{{ $certificate->file_path }}">
                        @else
                            <a href="{{ $certificate->url }}">
                                @endif
                                @if (!empty($certificate->image['url']))
                                    <img src="{{ $certificate->image['url'] }}">
                                @endif
                            </a>

            </div>
            <div class="certificates__file">
                <div class="certificates__text">
                    {{ $certificate->name }}
                </div>
            </div>
        </div>
    @endforeach
</div>
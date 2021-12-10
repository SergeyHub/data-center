@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/research/quote.css') }}">
@endsection

<div class="research-quotes content">
    @foreach ($content['elements'] as $item)
        <div class="research-quote">
            <div class="research-quote__person" itemscope itemtype="http://schema.org/Person">
                <meta itemprop="name" content="{{ $item['name'] }}"/>
                <meta itemprop="jobTitle" content="{{ $item['title'] }}"/>
                @if (!empty($item['img']))
                    <img class="research-quote__photo" itemprop="image" src="{{ $item['img'] }}"/>
                @endif
                <div class="research-quote__name">
                    <strong>{{ $item['name'] }}</strong>
                    <span>{{ $item['title'] }}</span>
                </div>
            </div>
            <blockquote class="research-quote__blockquote">
                <p>{{ $item['text'] }}</p>
                <footer class="research-quote_hidden">
                    {{ $item['title'] }}
                </footer>
            </blockquote>
        </div>
    @endforeach
</div>

<div class="two-columns {{ $background === 'grey' ? 'bg-grey' : '' }}">
    <div class="content">
        @if(!empty($title))
            <h2>{{ $title }}</h2>
        @endisset
        <div class="block-content">
            @foreach($content as $item)
                <div>
                    @includeIf('blocks.' . $item['type'], ['content' => $item['content']])
                </div>
            @endforeach
        </div>

    </div>

</div>

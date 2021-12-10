@if ($paginator->hasPages())
    <div class="pagination content">
        @if ($paginator->onFirstPage())
            <span class="disabled">{{  __('content.Пред.') }}</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">{{  __('content.Пред.') }}</a>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page === $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">{{ __('content.След.') }}</a>
        @else
            <span aria-hidden="true">{{ __('content.След.') }}</span>
        @endif
    </div>
@endif

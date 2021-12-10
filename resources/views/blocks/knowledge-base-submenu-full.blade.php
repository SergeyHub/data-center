@foreach ($pages as $page)
    @if (!empty($page) && $page->published)
        <li class="knowledge-base__li knowledge-base__li_depth-{{ $depth }}">
            @if ($page->childrens->count())
                <h{{ 1 + $depth }} class="knowledge-base__heading_{{ 1 + $depth }}">
                {{ $page->name }}
                </h{{ 1 + $depth }}>
                <ul class="knowledge-base__ul knowledge-base__ul_depth-{{ $depth }}">
                    @include('blocks.knowledge-base-submenu-full', ['pages' => $page->childrens, 'depth' => 1 + $depth])
                </ul>
            @else
                <a href="{{ route('knowledge-base.item', ['clean_url' => $page->clean_url]) }}"
                   class="knowledge-base__link">
                    {{ $page->name }}
                </a>
            @endif
        </li>
    @endif
@endforeach

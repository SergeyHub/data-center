@foreach ($pages as $page)
    @if (!empty($page) && $page->published)
        <li class="knowledge-base__li bg-grey knowledge-base__li_depth-{{ $depth }}">
            @if ($page->childrens->count())
                <div class="knowledge-base__slide">
                    @if ($depth > 1)
                        <span class="knowledge-base__triangle"></span>
                    @endif
                    @if(is_string($page->fields['builder']))
                        @php($fields = json_decode($page->fields['builder'], true))
                    @else
                        @php($fields = $page->fields['builder'])
                    @endif
                    <a href="{{ route('knowledge-base.item', ['clean_url' => $page->clean_url]) }}"
                       class="knowledge-base__link {{
                                                        empty($page->content)
                                                        || (count($fields) === 1 && $fields[0]['content'] == "")
                                                            ? 'knowledge-base__link_sublist'
                                                            : 'knowledge-base__link_click'
                                                    }}">{{ $page->name }}</a>

                    @if ($depth == 1)
                        <span class="knowledge-base__triangle"></span>
                    @endif
                </div>
                <ul class="knowledge-base__ul knowledge-base__ul_depth-{{ $depth }} {{
                                                                                        isset($current_parents)
                                                                                        && !empty($current_parents)
                                                                                        && in_array($page->id, $current_parents)
                                                                                            ? 'knowledge-base__ul_open'
                                                                                            : ''
                                                                                    }}">
                    @if(isset($current_parents) && !empty($current_parents))
                        @include('blocks.knowledge-base-submenu', ['pages' => $page->childrens, 'depth' => 1 + $depth, 'current_parents' => $current_parents])
                    @else
                        @include('blocks.knowledge-base-submenu', ['pages' => $page->childrens, 'depth' => 1 + $depth])
                    @endif
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

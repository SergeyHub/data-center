@inject('pageRepository', 'App\Services\PageRepository')
<ul>
    @foreach($pageRepository->getMenu() as $item)
        <li
            class="{{ (isset($item->children) && count($item->children)) || $item->behavior === 'cod' ? 'has-child' : '' }}">
            <a href="{{ $item->url }}">{{ $item->name }}</a>
            @if($item->behavior === 'cod')
                <div class="links__children">
                    <div>
                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#moscow">
                            {{ __('content.Москва') }}
                        </a>
                    </div>
                    <div>
                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#saint-petersburg">
                            {{ __('content.Санкт-Петербург') }}
                        </a>
                    </div>
                    <div>
                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#warsaw">
                            {{ __('content.Варшава') }}
                        </a>
                    </div>
                </div>
            @endif
            @if (isset($item->children) && count($item->children))

                <div
                    class="links__children {{ $item->behavior === 'services' ? 'megamenu' : '' }}"
                >

                    @if($item->behavior === 'services')
                        <div class="megamenu__mid-wrapper content">
                            @endif
                            @foreach ($item->children as $child1)
                                <div class="{{ $item->behavior === 'services' ? 'megamenu__block' : '' }}">
                                    @if($item->behavior === 'services')
                                        <a href="{{ route('services.category', ['slug' => $child1->slug]) }}">
                                            {{ $child1->name }}
                                        </a>
                                    @else
                                        <a href="{{ !empty($child1->behavior) ? $pageRepository->getPageByBehavior($child1->behavior)->url : $child1->url }}">
                                            @if(!empty($child1->name_in_menu))
                                                {{ $child1->name_in_menu }}
                                            @else
                                                {{ $child1->name }}
                                            @endif
                                        </a>
                                    @endif

                                    @if ($item->behavior === 'services' && isset($child1->services))
                                        <ul class="{{ $item->behavior === 'services' ? 'megamenu__sub-ul' : '' }}">
                                            @foreach ($child1->services as $child2)
                                                @if ($child2->slug === 'cloud')
                                                    @continue
                                                @endif
                                                <li>
                                                    <a href="{{ route('services.item', ['slug' => $child2->slug, 'category' => $child1->slug]) }}">
                                                        {{ $child2->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                            @if($child1->slug === 'network-services')
                                                <li>
                                                    <a href="http://lg.admindatacenter.com/" target="_blank">
                                                        Looking glass
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://ix.admindatacenter.com/" target="_blank">
                                                        admindatacenter IX
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    @endif
                                </div>
                            @endforeach
                            @if($item->behavior === 'services')
                        </div>
                    @endif
                        @if($item->behavior === 'about')
                            <div>
                                <a href="/career">
                                    Карьера
                                </a>
                            </div>
                        @endif
                </div>
            @endif
        </li>
    @endforeach
</ul>

<div class="cards block">
    <div class="content">
        <div class="cards__container">
            @foreach ($models as $item)
                <a href="{{ route('events.item', ['slug' => $item->slug]) }}" class="card border-gradient">
                    <div>
                        <div class="status">{{ $item->getStatus() }}</div>
                        <div class="title">
                            {{ $item->name }}
                        </div>
                        <p class="description">
                            {!! $item->description !!}
                        </p>
                        <ul>
                            <li>
                                <img src="/images/icons/red-clock.svg">{{ $item->time_start->format('d F Yг. H:i') }} - {{ $item->time_end->format('H:i') }}
                            </li>
                            <li>
                                <img src="/images/icons/location.svg">{!! $item->location !!}
                            </li>
                        </ul>
                    </div>
                    <span class="more">{{ strtoupper(__('content.Подробнее')) }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>

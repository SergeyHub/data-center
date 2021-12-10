<div class="simple-icon-list">
    <ul>
        @foreach($content['elements'] as $item)
            <li>
                <img src="{{ $item->img }}"><span>{{ $item['text'] }}</span>
            </li>
        @endforeach
    </ul>
</div>


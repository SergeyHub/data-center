<?php $type = Request::get('type') ?>
<div class="categories content">

    <a href="{{ route('events') }}"
       class="{{ !$type ? 'active' : '' }}">
        {{ __('content.Все') }}
    </a>
    @foreach ($events_type as $event_type)
        <a href="{{ route('events', ['type' => $event_type]) }}"
           class="{{ $type === $event_type ? 'active' : '' }}">
            {{ $event_type }}
        </a>
    @endforeach
</div>

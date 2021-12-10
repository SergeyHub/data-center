<li class="dd-item" @if(!empty($id)) data-id="{{ $id }}"@endif>
    @if(!empty($nestable))
        <div class="dd-handle"></div>
    @endif

    <div class="dd-content {{ empty($nestable) ? 'no-drag' : '' }}">
        <div
            class="d-flex justify-content-between row-content {{ isset($autoWidth) ? 'eq-width' : '' }}"
        >
            {{ $slot }}
        </div>
    </div>

    {!! $child ?? '' !!}
</li>

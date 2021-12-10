<div class="form-group">
    @include('elements.label')

    <textarea
        name="{{ $name }}"
        class="form-control {{ $class ?? '' }}"
        rows="5"
    >{!! $value ?? '' !!}</textarea>

    @include('elements.error')
</div>

<div class="form-group">
    @include('elements.label')

    <input
           type="{{ $type ?? 'text' }}"
           class="form-control {{ $class ?? '' }}"
           name="{{ $name }}"
           placeholder="{{ $placeholder ?? '' }}"
           value="{{ $value ?? '' }}"
    />

    @include('elements.error')
</div>

<button
    type="{{ $type ?? 'submit' }}"
    class="{{ $class ?? 'form-control' }}"
    @isset($id) id="{{ $id }}" @endisset
>{{ $slot }}</button>

<div>
    <label for="{{ $name }}">
        {{ $label ?? $name }}
        {{ !empty($required) ? '*' : '' }}
    </label>
</div>

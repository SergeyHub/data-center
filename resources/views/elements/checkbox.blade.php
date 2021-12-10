<div class="form-group">
    <label>
        <input type="hidden" name="{{ $name }}" value="0">

        <input type="checkbox"
               name="{{ $name }}"
               value="1"
               {{ !empty($disabled) ? 'disabled' : '' }}
               {{ !empty($checked) ? 'checked' : '' }}
               {{ !empty($custom) ? implode($custom, ' ') : '' }}
        />

        {{ $label ?? $name }}
        {{ !empty($required) ? '*' : '' }}
    </label>

    @include('elements.error')
</div>

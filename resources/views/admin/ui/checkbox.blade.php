<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label>
        <input type="hidden" name="{{ $name }}" value="0">

        <input type="checkbox"
               name="{{ $name }}"
               value="1"
               {{ isset($required) && $required ? 'required' : '' }}
               {{ isset($disabled) && $disabled ? 'disabled' : '' }}
               {{ isset($custom) ? implode(' ', $custom) : '' }}
               {{ (old($name) ?? $model->$name) ? 'checked' : '' }}
        />

        {{ $label ?? $name }}
    </label>
    @include('admin.ui.error')
</div>

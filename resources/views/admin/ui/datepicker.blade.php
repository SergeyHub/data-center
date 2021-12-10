<div class="form-group d">
    @include('admin.ui.label')


    <div
        type="{{ $type ?? 'text' }}"
        class="datepicker"
        name="{{ $name }}"
        autocomplete="off"
        value="{{ old($name) ?? $model->$name }}"
    ></div>

    @include('admin.ui.error')
</div>

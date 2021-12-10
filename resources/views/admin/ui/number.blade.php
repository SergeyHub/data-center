<div class="form-group">
    @include('admin.ui.label')

    <input
           type="{{ $type ?? 'text' }}"
           class="form-control"
           name="{{ $name }}"
           value="{{ old($name) ?? $model->$name }}"
           step="{{ $step ?? 1 }}"
    />

    @include('admin.ui.error')
</div>

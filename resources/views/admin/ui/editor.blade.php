<div class="form-group">
    @include('admin.ui.label')

    <div
        class="editor"
        data-name="{{ $name }}"
        data-value="{{ $model->$name }}"
    ></div>

    @include('admin.ui.error')
</div>


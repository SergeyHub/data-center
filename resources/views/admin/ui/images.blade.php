<div class="form-group">
    @include('admin.ui.label')

    <div
        class="images"
        data-name="{{ $name }}"
        data-images="{{ $model->$name ?? '[]' }}"
    ></div>

    @include('admin.ui.error')
</div>

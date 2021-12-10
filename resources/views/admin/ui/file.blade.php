<div class="form-group">
    @include('admin.ui.label')

    <div
        class="form-control-file {{ $class ?? '' }}"
        data-file_path="{{ $model->$name ?? '' }}"
        data-db_column="{{ $name ?? '' }}"
    ></div>

    @include('admin.ui.error')
</div>

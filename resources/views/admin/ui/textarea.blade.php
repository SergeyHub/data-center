<div class="form-group">
    @include('admin.ui.label')

    <textarea
        name="{{ $name }}"
        class="form-control {{ $class ?? '' }}"
        rows="5"
    >{!! old($name) ?? $model->$name !!}</textarea>

    @include('admin.ui.error')
</div>

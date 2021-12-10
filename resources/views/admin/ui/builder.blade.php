<div class="form-group">
    <?php $translate = $model->translate(app()->getLocale()); ?>
    <?php $value = $translate->$name ?? '[]'; ?>
    @if (is_array($value))
        <?php $value = json_encode($value); ?>
    @endif
    <div
        class="builder"
        data-name="{{ $name }}"
        data-allowed="{{ !empty($allowed) ? json_encode($allowed) : '[]' }}"
        data-value="{{ $value ?? '[]' }}"
    ></div>

    @include('admin.ui.error')
</div>

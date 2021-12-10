<?php
    use App\Models\Image;
    /* @var $name */
    /* @var $model */

    $image = Image::find($model->$name) ?: new Image;
?>

<div class="form-group">
    @include('admin.ui.label')

    <div
        class="image"
        data-name="{{ $name }}"
        data-id="{{ $image->id }}"
        data-src="{{ $image->url }}"
    ></div>

    @include('admin.ui.error')
</div>

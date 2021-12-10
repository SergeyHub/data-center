<?php

use \App\Models\Document;

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'Название'
    ],
    [
        'name' => 'document_category_id',
        'type' => 'select',
        'label' => 'Категория',
        'options' => App\Models\DocumentCategory::with('translation')->lang()->get()->pluck('translation.name', 'id'),
        'value' => $model->document_category_id
    ],
    [
        'name' => 'published',
        'type' => 'checkbox',
        'label' => 'Опубликован'
    ],
    [
        'name' => 'file_path',
        'type' => 'file',
        'label' => 'Документ'
    ],
    [
        'name' => 'image_id',
        'type' => 'image',
        'label' => 'Уменьшенное изображение'
    ],
    [
        'name' => 'description',
        'type' => 'textarea',
        'label' => 'Описание'
    ],
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

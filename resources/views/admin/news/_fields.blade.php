<?php

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'Название'
    ],
    [
        'name' => 'description',
        'type' => 'textarea',
        'label' => 'Описание'
    ],
    [
        'name' => 'published',
        'type' => 'checkbox',
        'label' => 'Опубликован'
    ],
    [
        'name' => 'slug',
        'type' => 'input',
        'label' => 'Url (если пусто, то сгенерируется автоматически)'
    ],
    [
        'name' => 'created_at',
        'type' => 'datepicker',
        'label' => 'Дата создания'
    ],
    [
        'name' => 'category_id',
        'type' => 'select',
        'options' => App\Models\NewsCategory::all()->pluck('name', 'id'),
        'multi' => true,
        'label' => 'Категория',
        'value' => $model->category_id
    ],
    [
        'name' => 'fields[builder]',
        'type' => 'builder',
        'allowed' => [
            'tinymce',
            'two_cols',
            'images'
        ],
        'label' => 'Контент'
    ],
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

@include('admin.base._fields_meta')

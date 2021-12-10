<?php

$fields = [
    [
        'name' => 'fields[header_image_id]',
        'type' => 'image',
        'label' => 'Изображение шапки'
    ],
    [
        'name' => 'fields[slider]',
        'type' => 'images',
        'label' => 'Слайдер'
    ],
    [
        'name' => 'content',
        'type' => 'editor',
        'label' => 'Текст'
    ]
];

?>

@include('admin.page._fields_base')

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

@include('admin.base._fields_meta')

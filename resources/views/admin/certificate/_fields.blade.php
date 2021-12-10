<?php

use \App\Models\Document;

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'Название'
    ],
    [
        'name' => 'published',
        'type' => 'checkbox',
        'label' => 'Опубликован'
    ],
    [
        'name' => 'image_id',
        'type' => 'image',
        'label' => 'Уменьшенное изображение'
    ],
    [
        'name' => 'file_path',
        'type' => 'file',
        'label' => 'Документ'
    ],
    [
        'name' => 'sort',
        'type' => 'number',
        'label' => 'Номер в очереди сортировки'
    ],
    [
        'name' => 'class',
        'type' => 'input',
        'label' => 'CSS класс (big)'
    ],
    [
    'name' => 'url',
    'type' => 'input',
    'label' => 'URL (оставьте пустым, если не используете)'
]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

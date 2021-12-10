<?php

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
        'name' => 'responsibility',
        'type' => 'editor',
        'label' => 'Обязанности'
    ],
    [
        'name' => 'requirement',
        'type' => 'editor',
        'label' => 'Требования'
    ],
    [
        'name' => 'conditions',
        'type' => 'editor',
        'label' => 'Условия'
    ]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

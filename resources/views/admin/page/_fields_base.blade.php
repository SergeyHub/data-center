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
        'name' => 'slug',
        'type' => 'input',
        'label' => 'Url (если пусто, то сгенерируется автоматически)'
    ],
    [
        'name' => 'behavior',
        'type' => 'input',
        'label' => 'Behavior'
    ],
    [
        'name' => 'in_menu',
        'type' => 'checkbox',
        'label' => 'Выводить в меню'
    ],
    [
        'name' => 'name_in_menu',
        'type' => 'input',
        'label' => 'Название в меню (если не пусто, то соответствует названию)'
    ],
    [
        'name' => 'name_in_title',
        'type' => 'input',
        'label' => 'Название в Title (если пусто, соответствует названию)'
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

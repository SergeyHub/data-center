<?php

$fields = [
    [
        'name' => 'type_ru',
        'type' => 'input',
        'label' => 'Тег RU'
    ],
    [
        'name' => 'type_en',
        'type' => 'input',
        'label' => 'Тег EN'
    ]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

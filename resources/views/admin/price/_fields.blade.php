<?php

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'name'
    ],
    [
        'name' => 'title',
        'type' => 'input',
        'label' => 'Заголовок'
    ],
    [
        'name' => 'value',
        'type' => 'number',
        'label' => 'Цена',
        'step' => '.01'
    ]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

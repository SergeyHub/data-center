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
        'name' => 'video_key',
        'type' => 'input',
        'label' => 'YouTube видео ID'
    ]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

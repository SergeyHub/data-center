<?php

$fields = [
    [
        'type' => 'hr',
        'label' => 'SEO'
    ],
    [
        'name' => 'meta_title',
        'type' => 'input',
        'label' => 'Meta Title'
    ],
    [
        'name' => 'meta_description',
        'type' => 'input',
        'label' => 'Meta Description'
    ],
    [
        'name' => 'meta_keywords',
        'type' => 'input',
        'label' => 'Meta Keywords'
    ]
];

?>

@foreach($fields as $field)
    @includeFirst(['admin.ui.' . $field['type'], 'admin.ui.input'], $field)
@endforeach

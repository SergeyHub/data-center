<?php

$fields = [
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

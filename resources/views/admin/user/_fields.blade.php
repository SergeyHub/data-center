<?php

    $fields = [
        ['name' => 'name', 'type' => 'input', 'label' => 'Имя'],
        ['name' => 'email', 'type' => 'email', 'label' => 'Email'],
        ['name' => 'password', 'type' => 'input', 'label' => 'Пароль'],
    ];

?>

@foreach($fields as $field)
    @include('admin.ui.input', $field)
@endforeach

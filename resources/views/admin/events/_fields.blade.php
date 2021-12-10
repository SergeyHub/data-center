<?php
use \App\Models\Events;
use \App\Models\EventTypeValue;

$sdf = EventTypeValue::get();
$keys = array();
$values = array();
if ( app()->getLocale() == 'ru' ) {
    foreach ($sdf as $sdf_val){
        $keys[$sdf_val->id] = $sdf_val->type_ru;
        $values[] = $sdf_val->type_ru;
    }
}
if ( app()->getLocale() == 'en' ) {
    foreach ($sdf as $sdf_val){
        $fghf[] = $sdf_val->type_en;
    }
}

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'Название'
    ],
    [
        'name' => 'description',
        'type' => 'textarea',
        'label' => 'Описание'
    ],
    [
        'name' => 'location',
        'type' => 'textarea',
        'label' => 'Место проведения'
    ],
    [
        'name' => 'status',
        'type' => 'select',
        'label' => 'Теги',
        'options' => $keys,
        'value' => $model->status
    ],
    [
        'name' => 'time_start',
        'type' => 'datepicker',
        'label' => 'Время проведения'
    ],
    [
        'name' => 'time_end',
        'type' => 'datepicker',
        'label' => 'Время окончания'
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

@include('admin.base._fields_meta')

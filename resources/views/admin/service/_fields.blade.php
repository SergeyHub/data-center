<?php
//dd(\App\Models\ServiceInterest::with('services')->get());
$services = \App\Models\ServiceInterest::where(['parent_service_id' => $model->id])->get();
if (!empty($services)) {
    $services = $services->pluck('service_id');
}

$fields = [
    [
        'name' => 'name',
        'type' => 'input',
        'label' => 'Название'
    ],
    [
        'name' => 'slug',
        'type' => 'input',
        'label' => 'Url (если пусто, то сгенерируется автоматически)'
    ],
    [
        'name' => 'description',
        'type' => 'textarea',
        'label' => 'Описание'
    ],
    [
        'name' => 'category_id',
        'type' => 'select',
        'options' => App\Models\ServiceCategory::all()->pluck('name', 'id'),
        'multi' => true,
        'label' => 'Категория',
        'value' => $model->category_id
    ],
    [
        'name' => 'services_interest',
        'type' => 'select',
        'options' => \App\Models\Service::all()->pluck('name', 'id'),
        'multiple' => true,
        'label' => 'Сервисы - Вас также заинтересует',
        'value' => $services->toArray()
    ],
    [
        'name' => 'popular',
        'type' => 'checkbox',
        'label' => 'Популярная услуга'
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

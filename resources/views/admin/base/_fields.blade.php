@foreach($model->columns() as $column)
    @if(!in_array($column, ['id', 'created_at', 'updated_at']))
        @include('admin.ui.input', [
            'name' => $column,
            'model' => $model
        ])
    @endif
@endforeach

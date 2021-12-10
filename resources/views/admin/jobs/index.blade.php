@extends('admin.layouts.admin_list')

@section('links')

@endsection

@section('list')
    @foreach ($models as $model)
        @component('admin.ui.list_row', ['autoWidth' => true])
            <div>
                Attempts: {{ $model->attempts }}
            </div>
            <div>
                {{ substr($model->payload, 0, 100) }}
            </div>
            <div>
                {{ $model->created_at }}
            </div>
        @endcomponent
    @endforeach
@endsection

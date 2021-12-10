@extends('admin.layouts.admin_list')

@section('links')

@endsection

@section('list')
    @foreach($models as $model)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
                <h3>#{{ $model->id }} {{ strtoupper($model->type) }}</h3>
                <div>
                    {{ $model->created_at }}
                </div>
            </div>
            <div class="card-body">
                <div class="json">
                    {{ json_encode($model->data) }}
                </div>
            </div>
        </div>
    @endforeach
    {{ $models->links() }}
@endsection

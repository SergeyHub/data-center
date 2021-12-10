@extends('admin.layouts.admin_list')

@section('links')
    {{ $models->links() }}
@endsection

@section('list')
    @foreach ($models as $model)
        @component('admin.ui.list_row', ['autoWidth' => true])
            <div>{{ $model->user ? "{$model->user->name} id: {$model->user_id}" : 'system' }}</div>
            <div>{{ $model->type }}</div>
            <div>{{ class_basename($model->model) }} id: {{ $model->model_id }}</div>
            <div>{{ $model->getResourceName() }}</div>
            <div>{{ $model->created_at->formatLocalized('%d %B %Y %H:%M') }}</div>
            <div>
                <a href="#info-{{ $model->id }}" data-toggle="modal">
                    <i class="far fa-eye"></i>
                </a>
                <div id="info-{{ $model->id }}" class="modal fade bd-example-modal-lg"
                     tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            @foreach($model->data as $k => $v)
                                <div class="text-center">
                                    <div class="bg-light">{{ $k }} before</div>
                                    <div>{{ $v['before'] }}</div>
                                    <div class="bg-light">{{ $k }} after</div>
                                    <div>{{ $v['after'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endcomponent
    @endforeach
@endsection

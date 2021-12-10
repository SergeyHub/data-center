@extends('admin.layouts.admin_list')

@section('links')
    {{ $models->links() }}
@endsection

@section('list')
    @foreach ($models as $model)
        @component('admin.ui.list_row', ['autoWidth' => true])
            <div>{{ $model->typeName() }}</div>
            <div>{{ $model->created_at->formatLocalized('%d %B %Y %H:%M') }}</div>
            <div>
                <a href="#info-{{ $model->id }}" data-toggle="modal">
                    <i class="far fa-eye"></i>
                </a>
                <div id="info-{{ $model->id }}" class="modal fade bd-example-modal-lg"
                     tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            @foreach($model->fields as $k => $v)
                                <div class="text-center">
                                    @if (!is_string($v))
                                        @continue
                                    @endif
                                    <div>{{ $model->fieldName($k) }}:</div>
                                    <div class="bg-light">{{ $v }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endcomponent
    @endforeach
@endsection

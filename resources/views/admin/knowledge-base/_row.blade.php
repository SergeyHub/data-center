@component('admin.ui.list_row', ['id' => $model->id, 'nestable' => true])
    <div>
        {{ \Illuminate\Support\Str::limit($model->name, 70) }}
    </div>
    <div>
        <div class="dropdown link" data-toggle="tooltip" title="Редактировать" >
            <span class="list-item-control mr-2 ml-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-edit"></i>
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route($route . '.edit', [$model->id, 'locale' => 'ru']) }}">
                    RU
                </a>
                <a class="dropdown-item" href="{{ route($route . '.edit', [$model->id, 'locale' => 'en']) }}">
                    EN
                </a>
            </div>
        </div>

        @include('admin.ui.delete', ['route' => route($route . '.destroy', [$model->id])])
    </div>

    @if ($model->childrens->count())
        @slot('child')
            @component('admin.ui.list_list')
                @foreach ($model->childrens as $model)
                    @includeFirst(["admin.{$name}._row", "admin.{$name}._row", "admin.base._row"], [
                        'model' => $model
                    ])
                @endforeach
            @endcomponent
        @endslot
    @endif
@endcomponent

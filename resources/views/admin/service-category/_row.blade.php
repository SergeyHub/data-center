@component('admin.ui.list_row', ['id' => $model->id, 'nestable' => true])
    <div>{{ \Illuminate\Support\Str::limit($model->name, 120) }}</div>
    <div>

        @if ($model->translatedAttributes)
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
        @else
            <a
                data-toggle="tooltip"
                title="Редактировать"
                href="{{ route($route . '.edit', [$model->id]) }}"
                class="mr-3 list-item-control"
            >
                <i class="far fa-edit"></i>
            </a>
        @endif

        @include('admin.ui.delete', ['route' => route($route . '.destroy', [$model->id])])
    </div>
@endcomponent

@component('admin.ui.list_row')
    <div>{{ \Illuminate\Support\Str::limit($model->title, 120) }} <b>{{ $model->value }}</b></div>
    <div>
        @if($model->published !== null)
            @if($model->published)
                <i class="fas fa-eye mr-2 ml-2" data-toggle="tooltip" title="Опубликован"></i>
            @else
                <i class="fas fa-eye-slash mr-2 ml-2" data-toggle="tooltip" title="Не опубликован"></i>
            @endif
        @endif

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

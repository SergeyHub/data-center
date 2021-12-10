@component('admin.ui.list_row', ['id' => $model->id, 'nestable' => true])
    <div>
        {{ \Illuminate\Support\Str::limit($model->name, 70) }}
    </div>
    <div>
        @if($model->in_menu)
            <i class="fas fa-bars mr-2 ml-2" data-toggle="tooltip" title="Выводится в меню"></i>
        @endif

        @if($model->published)
            <i class="fas fa-eye mr-2 ml-2" data-toggle="tooltip" title="Опубликован"></i>
        @else
            <i class="fas fa-eye-slash mr-2 ml-2" data-toggle="tooltip" title="Не опубликован"></i>
        @endif

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
        <a class="list-item-control mr-2 ml-2" data-toggle="tooltip" title="Создать копию страницы" onclick="return confirm('Создать копию страницы?');" href="{{ route($route . '.copy', [$model->id]) }}"><i class="far fa-copy"></i></a>
        <a class="list-item-control mr-2 ml-2" data-toggle="tooltip" title="Создать дочернюю страницу" onclick="return confirm('Создать дочернюю страницу?');" href="{{ route($route . '.child', [$model->id]) }}"><i class="fas fa-stream"></i></a>

        @include('admin.ui.delete', ['route' => route($route . '.destroy', [$model->id])])
    </div>

    @if($model->childrens->count())
        @slot('child')
            @component('admin.ui.list_list')
                @foreach($model->childrens as $model)
                    @includeFirst(["admin.{$name}._row", "admin.{$name}._row", "admin.base._row"], [
                        'model' => $model
                    ])
                @endforeach
            @endcomponent
        @endslot
    @endif
@endcomponent

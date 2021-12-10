@extends('admin.layouts.admin_form')

@section('action', route($route . '.update', [$model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('form-delete-translation')
    @isset($model->translation)
        <form class="translation-destroy"
              action="{{ route("$route.translation.delete", ['model_id' => $model->id, 'id' => $model->translation->id]) }}"
              method="post"
              onsubmit="return confirm('Удалить перевод({{ $model->translation->locale }})?');">
            @csrf
            @method('delete')
            <button class="btn btn-outline-danger">Удалить перевод</button>
        </form>
    @endisset
@endsection

@section('lang')
    {{ app()->isLocale('ru') ? 'Русский' : '' }}
    {{ app()->isLocale('en') ? 'English' : '' }}
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin.base._fields"])
@endsection

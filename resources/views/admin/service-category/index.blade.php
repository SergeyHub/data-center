@extends('admin.layouts.admin_tree')

@section('controls')
    <a class="btn btn-outline-primary" href="{{ route($route . '.create') }}"><i class="fas fa-plus"></i> Добавить</a>
    <div class="lang">
        <div class="locale">
            @if (app()->isLocale('ru'))
                Ru
            @endif
            @if (app()->isLocale('en'))
                En
            @endif
        </div>
        <div class="switch-locale">
            <div><a href="{{ route('locale.ru') }}">Русский</a></div>
            <div><a href="{{ route('locale.en') }}">English</a></div>
        </div>
    </div>
@endsection

@section('list')
    @foreach($models->sortBy('sort') as $model)
        @includeFirst(["admin.{$name}._row", "admin.{$name}._row", "admin.base._row"], [
            'model' => $model,
            'padding' => 0
        ])
    @endforeach
@endsection

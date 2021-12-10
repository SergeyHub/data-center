@extends('admin.layouts.admin_form')

@section('action', route($route . '.store'))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin.base._fields"])
@endsection

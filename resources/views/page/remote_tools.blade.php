@extends('layouts.app')

@section('body-class', 'page-remote-tools')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.admin REMOTE TOOLKIT: РЕШЕНИЯ ДЛЯ УДАЛЕННОЙ РАБОТЫ'),
    ])

@endsection

@extends('admin.layouts.admin')

@section('content')
    <form method="POST" action="@yield('action')">
        <h3 class="header-lang">
            @yield('lang')
        </h3>
        @csrf
        @if($action == 'edit')
            @method('PUT')
        @endif
        <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
        <div class="row">
            <div class="col-md-10">
                @yield('fields')
            </div>
            <div class="col-md-2">
                <div class="control-buttons">
                    @yield('controls')
                </div>
            </div>
        </div>
    </form>
    @yield('form-delete-translation')

    <div class="row">
        <div class="col-md-12">
            @yield('additional')
        </div>
    </div>

@endsection

@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    @component('admin.ui.list_container')
                        @component('admin.ui.list_list')
                            @yield('list')
                        @endcomponent
                    @endcomponent
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    @yield('links')
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="control-buttons">
                @yield('controls')
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('body-class', 'page-loyalty')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/loyalty.css') }}">
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => $model->name
    ])

    <div class="content">
        <div class="container">
            <div>
                @if(is_string($model->fields['builder']))
                    @php($fields = json_decode($model->fields['builder'], true))
                @else
                    @php($fields = $model->fields['builder'])
                @endif

                @foreach($fields as $field)
                    @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
                @endforeach
            </div>
            <div>
                @include('blocks.calendar')
            </div>
        </div>
    </div>

@endsection

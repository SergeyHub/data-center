@extends('layouts.app')

@section('body-class', 'page-event-detailed')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/page-event-detailed.css') }}">
@endsection


@section('scripts')
    <script
        src="https://api-maps.yandex.ru/2.1/?apikey=36be9e2e-a5c2-476b-82bf-f3e403ee6c72&lang=en_US"
    ></script>
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => $model->name,
        'subtitle' => $model->time_start->isoFormat('OD MMMM YYYY') . ' | ' . $model->time_start->format('H:i') . '-' . $model->time_end->format('H:i'),
        'location' => $model->location,
        'registerBtn' => true,
        'timeend' => $model->time_end->isoFormat('OD MM YYYY') . ' ' .  $model->time_end->format('H:i')
    ])

    <div class="container">
        <div class="event">
            @if(is_string($model->fields['builder']))
                @php($fields = json_decode($model->fields['builder'], true))
            @else
                @php($fields = $model->fields['builder'])
            @endif

            @foreach ($fields as $field)
                @include('blocks.' . $field['type'], ['content' => $field['content'], 'background' => $field['background'] ?? ''])
            @endforeach
            <div style="margin: 20px auto">
                @include('blocks.soc-share')
            </div>
        </div>

        @include('blocks.events-apply-request')
    </div>
@endsection


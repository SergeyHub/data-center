@foreach($data as $key => $value)
    @if (is_array($value))
        {{ $key }} {{ json_encode($value, JSON_UNESCAPED_UNICODE) }} <br>
    @else
        {{  $key }}: {{ $value }} <br>
    @endif
@endforeach

@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/research/company.css') }}">
@endsection
<div class="research-companies-wrapper">
    <div class="content grid grid_2 grid_companies">
        @foreach ($content['elements'] as $item)
            <div class="company grid grid_20-80 grid_company">
                <div class="company__image" style="background-image: url('{{ $item['img'] }}')">
                </div>
                <div class="company__text">
                    {!! $item['text'] !!}
                </div>
            </div>
        @endforeach
    </div>
</div>

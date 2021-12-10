@section('styles')
    <link rel="stylesheet" href="{{  mix('/css/vacancy.css') }}">
@endsection
@section('scripts')
    <script src="{{  mix('/js/vacancy.js') }}"></script>
@endsection

@include('blocks.vacancy.news')
@include('blocks.vacancy.application-form')

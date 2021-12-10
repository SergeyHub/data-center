@extends('layouts.app')

@section('body-class', 'page-contacts')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/contacts.css') }}">
@endsection

@section('scripts')
    <script
        src="https://api-maps.yandex.ru/2.1/?apikey=36be9e2e-a5c2-476b-82bf-f3e403ee6c72&lang=en_US"
    ></script>
    <script src="{{ mix('/js/contacts.js') }}"></script>
@endsection

@section('content')

    @include('blocks.header-title', [
        'title' => __('content.Контакты')
    ])

    <div id="ya-map"></div>
    <div id="test"></div>

    @if(is_string($model->fields['builder']))
        @php($fields = json_decode($model->fields['builder'], true))
    @else
        @php($fields = $model->fields['builder'])
    @endif

    @foreach($fields as $field)
        @include('blocks.' . $field['type'], ['content' => $field['content']])
    @endforeach

    <script>
        let options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function success(pos) {
            let crd = pos.coords;
            callApi(crd.longitude + ',' + crd.latitude)
                .then(json => {
                    let arr = json.response.response.GeoObjectCollection.featureMember[0].GeoObject;
                    if(arr) {
                        const currentCityName = arr.name;
                        document.querySelectorAll('.office .info p').forEach(function(element) {
                            let getCityFromDiv = element.childNodes[0].nodeValue;
                            if(element.childNodes[2].nodeValue) {
                                getCityFromDiv = element.childNodes[2].nodeValue;
                            }

                            callApi(getCityFromDiv)
                                .then(jsosiska => {
                                    let arrSub = jsosiska.response.response.GeoObjectCollection.featureMember[0].GeoObject;
                                    if(arrSub) {
                                        if(arrSub.name.toLowerCase() === currentCityName.toLowerCase()) {
                                            let elementOffice = element.closest(".office");
                                            elementOffice.click();
                                            elementOffice.classList.add('active');
                                        }
                                    }
                                });
                        });
                    }
                });
        };

        function callApi(geocode) {
            let url = "https://geocode-maps.yandex.ru/1.x/?apikey=36be9e2e-a5c2-476b-82bf-f3e403ee6c72&kind=\n" +
                "locality&format=json&results=1&geocode=" + geocode;
            return fetch(url)
                .then(response => {
                    if (response.ok) {
                        return response.json().then(response => ({ response }));
                    }
                    return response.json().then(error => ({ error }));
                });
        }


        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        };

        navigator.geolocation.getCurrentPosition(success, error, options);

    </script>
    @if(isset($_GET['loc']) && $_GET['loc'] == 'sp')
        <script>
              document.getElementById("msk_loc").classList.remove("active");
              document.getElementById("sp_loc").classList.add("active");
        </script>
    @endif


@endsection

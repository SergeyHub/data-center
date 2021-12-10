@inject('videoRepository', 'App\Services\VideoRepository')
@section('styles')
    @parent
    <link rel="stylesheet" href="/css/video.css">
@endsection
<svg xmlns="http://www.w3.org/2000/svg" class="svg-video">
    <symbol id="svg-icon-big_video_arrow" viewBox="0 0 151 151">
        <path d="M142.64 40.943a76.19 76.19 0 0 0-22.3-26.188 3.072 3.072 0 0 0-3.65 4.942 69.971 69.971 0 0 1 20.49 24.062 68.6 68.6 0 0 1 7.67 31.74A69.355 69.355 0 1 1 75.5 6.144a3.073 3.073 0 0 0 0-6.145 75.469 75.469 0 1 0 67.14 40.944zm-86.46-.5a3.083 3.083 0 0 0-1.56 2.672v67.435a3.075 3.075 0 0 0 6.15 0V48.519l45.5 27.082-33.46 21.554a3.074 3.074 0 1 0 3.33 5.167l37.62-24.241a3.072 3.072 0 0 0-.09-5.224l-54.4-32.385a3.073 3.073 0 0 0-3.09-.031z"></path>
    </symbol>
</svg>
<div class="content hf-video video_news js-animate">
    @foreach ($videoRepository->getAllVideos() as $video)
        <div class="company-video new" id="{{ $video->id }}">
            <div class="company-video__wrap">
                <div class="company-video__title">{{ $video->name }}</div>
                <div class="company-video__image">
                    <img src="https://img.youtube.com/vi/{{ $video->video_key }}/maxresdefault.jpg"
                         alt="">
                </div>
                <a class="company-video__play js-video-play play_no_popup"
                   data-href="https://www.youtube.com/embed/{{ $video->video_key }}">
                    <svg class="icon icon-big_video_arrow">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-big_video_arrow"></use>
                    </svg>
                </a><i></i>
                <div class="company-video__player">
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $videoRepository->getAllVideos()->links() }}
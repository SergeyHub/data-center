@inject('reviewRepository', 'App\Services\ReviewRepository')
<div class="reviews block">
    <div class="content">
        <h2>{{ $content['title'] }}</h2>
        <div class="reviews__container">
            <div class="rating">
                <div class="percent">92,45%</div>
                <p>{{ __('content.Индекс удовлетворенности клиентов') }}</p>
            </div>
            <div class="items-container">
                <div class="items">
                    @foreach($reviewRepository->getReviews() as $review)
                        <div class="item">
                            <div class="title">{{ $review->company }}</div>
                            <p>{{ $review->content }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="hr"></div>
                <p class="summary">
                    {{ $content['caption'] }}
                </p>
                <button class="btn gradient btn-review">{{ __('content.Оставить отзыв') }}</button>
            </div>
        </div>
    </div>
</div>

@include('blocks.modal-feedback')

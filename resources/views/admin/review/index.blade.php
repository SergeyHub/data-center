@extends('admin.layouts.admin_list')

@section('list')
    @foreach ($reviews as $review)
        <div class="review">
            <div class="subheader">
                <div>
                    {{ $review->created_at->format('d.m.Y H:i') }}
                </div>
                <div>
                    <b>{{ $review->getCaptionPublish() }}</b>
                </div>
            </div>
            <div class="email">
                <b>Email:</b> {{ $review->email }}
            </div>
            <div class="company">
                <b>Company:</b> {{ $review->company }}
            </div>
            <div class="estimate">
                <b>Оценка:</b> {{ $review->estimate }}
            </div>
            <div class="text">
                <b>Отзыв:</b>
            </div>
            <p>
               {{ $review->content }}
            </p>
            @include('admin.ui.checkbox', ['name' => 'published', 'label' => 'Опубликован', 'model' => $review, 'custom' => ["data-id={$review->id}"]])
        </div>
    @endforeach
@endsection

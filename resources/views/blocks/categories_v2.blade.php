<?php $categories = \App\Models\ServiceCategory::all(); ?>
<a href="#tab-1" class="btn service__btn tabs-target" onclick="category_list('0', '{{csrf_token()}}')">{{ __('content.Все') }}</a>
<!--<a href="{{ route('services') }}" class="{{ !empty($category) ?: 'active' }}">{{ __('content.Все') }}</a>-->
@php $i=1; @endphp
@foreach ($categories as $item)
    <!--<a class="{{ !empty($category) && $item['id'] === $category['id'] ? 'active' : '' }}"
       href="{{ route('services.category', ['slug' => $item['slug']]) }}">
        {{ $item['name'] }}
    </a>-->
    <a href="javascript:void(0);" class="btn service__btn tabs-target"  onclick="category_list('{{$item['id']}}', '{{csrf_token()}}')">
        <span class="btn__icon service__icn{{$i}}" style="width: 50px; height: 50px"></span>{{ $item['name'] }}
    </a>
    @php $i++; @endphp
@endforeach
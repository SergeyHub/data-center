@inject('langHelper', 'App\Services\LangHelper')
<section class="solution">
    <div class="solution__wrapper">
        <div class="content">
            @isset ($content['title'])
                <h2 class="solution__title">{!! $content['title'] !!}</h2>
            @endisset
            <div class="solution__table-block">
                <table class="solution__option">
                    <tr>
                        <td></td>
                        @foreach($content['columnElements'] as $item)
                            <td>
                                <span class="solution__option-title">{{$item['title']}}</span>
                                <a class="solution__anchor" href="#{{$item['title']}}">{{ __('content.посмотреть схему') }}</a>
                            </td>
                        @endforeach
                    </tr>
                    @for ($i = 0; $i < count($content['firstColumnElements']); $i++)
                        <tr>
                            <td>{{$content['firstColumnElements'][$i]['title']}}</td>
                            @foreach($content['columnElements'] as $item)
                                <td>{!! $item['firstColumnElements'][$i]['text'] !!} </td>
                            @endforeach
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
    </div>
    <div class="solution__wrapper-block">
        <div class="content">
            <div class="solution__list-blocks">
                @foreach($content['columnElements'] as $item)
                    <div class="item-block">
                        <div class="item-block__header">
                            <p class="item-block__title">{{$item['title']}}</p>
                        </div>
                        <div class="item-block__body">
                            @for ($i = 0; $i < count($content['firstColumnElements']); $i++)
                                <div class="item-block__element">
                                    <div class="item-block__element-title">{{$content['firstColumnElements'][$i]['title']}}</div>
                                    <div class="item-block__element-content">{!! $item['firstColumnElements'][$i]['text'] !!}</div>
                                </div>
                            @endfor
                            @if ($item['shema'] && $item['shema']['img'])
                            <div class="item-block__element item-block__element--image">
                                <div class="item-block__element-title">{{ __('content.Схема') }}</div>
                                <figure class="image-figures__block">
                                    <figcaption class="image-figures__title" id="{{$item['title']}}">{{$item['title']}}</figcaption>
                                    <img class="image-figures__image" src="{{$item['shema']['img']}}" alt="{{ __('content.Схема') }} {{$item['title']}}">
                                </figure>
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

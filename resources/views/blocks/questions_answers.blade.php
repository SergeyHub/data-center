<div class="question-answers bg-grey">
    <div class="content">
        @isset($content['title'])
            <div class="header">
                <h2>{{ $content['title'] }}</h2>
            </div>
        @endisset
        @isset($content['subtitle'])
            <div class="subtitle center">
                {{ $content['subtitle'] }}
            </div>
        @endisset
        <div class="block-content">
            @foreach($content['elements'] as $element)
                <div class="item">
                        <div class="title title-toggle-element">
                            {{ $element['question'] }}
                        </div>
                        <div class="expand">
                            <input type="checkbox" class="toggle-element">
                            <div class="open">
                                +
                            </div>
                            <div class="close">+</div>
                            <div class="answer">
                                {!! $element['answer'] !!}
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

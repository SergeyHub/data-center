@inject('priceRepository', 'App\Services\PriceRepository')
<div class="row">
    <div class="check vr">
        <label class="radio__container">
            <input name="computed_resource" class="check_resource" type="checkbox">
            <span class="checkmark"></span>
            {{ __('content.Виртуальные ресурсы') }}
        </label>
        <div class="subtitle">{{ __('content.Укажите желаемый объем вычислительных ресурсов') }}</div>
    </div>

    <div class="choose">
        <div class="choose-item vcpu">
            <div class="subtitle">{{ __('content.Процессоры') }}, vCPU (vCPU = 2 GHz)</div>
            <div class="counter-block bg-grey" data-price="{{ $priceRepository->getPrice('vkpu')->value }}">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="vcpu" value="0" /></div>
                <div class="plus">+</div>
            </div>
        </div>
        <div class="choose-item">
            <div class="subtitle">{{ __('content.ОП') }}, {{ __('content.ГБ') }}</div>
            <div class="counter-block bg-grey" data-price="233.48">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="ram" value="0"></div>
                <div class="plus">+</div>
            </div>
        </div>
        <div class="choose-item">
            <div class="subtitle">SAS, {{ __('content.ГБ') }}</div>
            <div class="counter-block bg-grey" data-price="{{ $priceRepository->getPrice('sas')->value }}">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="sas" value="0"></div>
                <div class="plus">+</div>
            </div>
        </div>
        <div class="choose-item">
            <div class="subtitle">SSD, {{ __('content.ГБ') }}</div>
            <div class="counter-block bg-grey" data-price="{{ $priceRepository->getPrice('ssd')->value }}">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="ssd" value="0"></div>
                <div class="plus">+</div>
            </div>
        </div>
    </div>
    <div class="result">
        <input type="hidden" name="resource" value="0">
        <div class="subtitle">{{ __('content.Стоимость') }}</div>
        <div class="item-sum"><span>0</span> {{ __('content.руб') }}.</div>
    </div>
</div>

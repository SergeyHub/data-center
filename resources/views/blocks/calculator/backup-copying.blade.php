@inject('priceRepository', 'App\Services\PriceRepository')
<div class="row">
    <div class="check rc">
        <label class="radio__container">
            <input class="check_resource" type="checkbox">
            <span class="checkmark"></span>
            {{ __('content.Резервное копирование') }}
        </label>
        <div class="subtitle">{{ __('content.Резервное копирование на базе решений Veeam') }}</div>
    </div>
    <div class="choose">
        <div class="choose-item">
            <div class="subtitle">{{ __('content.Дисковое пространство') }}, {{ __('content.ТБ') }}</div>
            <div class="counter-block bg-grey" data-price="{{ $priceRepository->getPrice('disc_space')->value }}">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="disk_space" value="0"></div>
                <div class="plus">+</div>
            </div>
        </div>
        <div class="choose-item">
            <div class="subtitle">{{ __('content.ВМ') }}, {{ __('content.шт') }}</div>
            <div class="counter-block bg-grey" data-price="{{ $priceRepository->getPrice('vm')->value }}">
                <div class="minus">-</div>
                <div class="counter"><input class="bg-grey" name="vm" value="0"></div>
                <div class="plus">+</div>
            </div>
        </div>
    </div>
    <div class="result">
        <input type="hidden" name="backup" value="0">
        <div class="subtitle">{{ __('content.Стоимость') }}</div>
        <div class="item-sum"><span>0</span> {{ __('content.руб') }}.</div>
    </div>
</div>

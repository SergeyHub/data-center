<div id="information-center" class="information-center">
    <div class="content">
        <div>
            <div>
                <form action="{{ route('form.subscribe') }}">
                    <input type="hidden" name="type" value="subscribe">
                    <input type="hidden" name="page" value="{{ url()->full() }}" >
                    <div>
                        <div class="text-input">
                            <input name="email" id="email-subscribe" type="email" class="form-control mb-2" placeholder="email">
                            <label for="email-subscribe" class="sr-only">Email</label>
                        </div>
                        <div>
                            <button class="btn">{{ __('content.Подписаться') }}</button>
                        </div>
                    </div>
                    <div class="errors">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<form action="/form/submit" class="ajax-form">
    <div class="form-items">
        @csrf
        @include('elements.hidden', ['name' => 'type', 'value' => 'contacts_page'])
        @include('elements.input', ['name' => 'name', 'label' => 'Имя', 'required' => true])
        @include('elements.input', ['name' => 'phone', 'label' => 'Телефон', 'required' => true])
        @include('elements.input', ['name' => 'email', 'label' => 'Email', 'required' => true])
        @include('elements.textarea', ['name' => 'message', 'label' => 'Сообщение', 'required' => true])
        @include('elements.checkbox', ['name' => 'agreement', 'label' => 'Согласие на обработку персональных данных', 'required' => true])
        @include('elements.submit')
    </div>
    <div class="success-message">
        <p>Спасибо за обращение!</p>
        <p>В ближайшее время мы свяжемся с вами.</p>
    </div>
</form>

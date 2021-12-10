<form action="{{ $route }}" class="delete-form" method="POST" onsubmit="return confirm('Удалить?');">
    @method('DELETE')
    {{ csrf_field() }}
    @component('admin.ui.button', ['type' => 'submit', 'class' => 'btn btn-link'])
        <i data-toggle="tooltip" title="Удалить" class="far fa-trash-alt"></i>
    @endcomponent
</form>

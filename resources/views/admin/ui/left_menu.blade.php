<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Контент</span>
</h6>

<ul class="nav flex-column mb-2">
    @include('admin.ui.left_menu_item', ['name' => 'Страницы', 'route' => 'page', 'icon' => 'far fa-file'])
    @include('admin.ui.left_menu_item', ['name' => 'Категориии новостей', 'route' => 'news-category', 'icon' => 'far fa-newspaper'])
    @include('admin.ui.left_menu_item', ['name' => 'Новости', 'route' => 'news', 'icon' => 'far fa-newspaper'])
    @include('admin.ui.left_menu_item', ['name' => 'Мы на хабре', 'route' => 'news-habr', 'icon' => 'far fa-newspaper'])
    @include('admin.ui.left_menu_item', ['name' => 'Сми о нас', 'route' => 'news-smi', 'icon' => 'far fa-newspaper'])
    @include('admin.ui.left_menu_item', ['name' => 'Категории услуг', 'route' => 'service-category', 'icon' => 'fa fa-database'])
    @include('admin.ui.left_menu_item', ['name' => 'Услуги', 'route' => 'service', 'icon' => 'fa fa-database'])
    @include('admin.ui.left_menu_item', ['name' => 'Теги для мероприятий', 'route' => 'event-type-value', 'icon' => 'far fa-calendar-check'])
    @include('admin.ui.left_menu_item', ['name' => 'Мероприятия', 'route' => 'events', 'icon' => 'far fa-calendar-check'])
    @include('admin.ui.left_menu_item', ['name' => 'База знаний', 'route' => 'knowledge-base', 'icon' => 'fas fa-brain'])
    @include('admin.ui.left_menu_item', ['name' => 'Цены', 'route' => 'price', 'icon' => 'fas fa-dollar-sign'])
    @include('admin.ui.left_menu_item', ['name' => 'Документы', 'route' => 'document', 'icon' => 'far fa-file-pdf'])
    @include('admin.ui.left_menu_item', ['name' => 'Видео-лекторий', 'route' => 'video', 'icon' => 'far fa-file-video'])
    @include('admin.ui.left_menu_item', ['name' => 'Лицензии и сертификаты', 'route' => 'certificate', 'icon' => 'fas fa-certificate'])
    @include('admin.ui.left_menu_item', ['name' => 'Вакансии', 'route' => 'vacancy', 'icon' => 'far fa-address-card'])
</ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Администрирование</span>
</h6>

<ul class="nav flex-column mb-2">
    @include('admin.ui.left_menu_item', ['name' => 'Отзывы', 'route' => 'reviews', 'icon' => 'fas fa-comments'])
    @include('admin.ui.left_menu_item', ['name' => 'Формы', 'route' => 'form', 'icon' => 'far fa-list-alt'])
    @include('admin.ui.left_menu_item', ['name' => 'Пользователи', 'route' => 'user', 'icon' => 'fas fa-users'])
    @include('admin.ui.left_menu_item', ['name' => 'Лог изменений', 'route' => 'log', 'icon' => 'far fa-eye'])
    @include('admin.ui.left_menu_item', ['name' => 'Настройки', 'route' => 'settings', 'icon' => 'fas fa-cogs'])
    @include('admin.ui.left_menu_item', ['name' => 'Log job', 'route' => 'log-job', 'icon' => 'fas fa-bars'])
    @include('admin.ui.left_menu_item', ['name' => 'Jobs', 'route' => 'jobs', 'icon' => 'fab fa-ubuntu'])
</ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>{{ Auth::user()->name }}</span>
</h6>

<ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a
            class="nav-link" href="#"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
            <i class="fas fa-sign-out-alt"></i>
            Выйти
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>

<div class="knowledge-base content">
    <ul class="knowledge-base__ul knowledge-base__ul_depth-0">
        @include('blocks.knowledge-base-submenu', ['pages' => $pages, 'depth' => 1])
    </ul>
    <article class="knowledge-base__article">
        <ul class="knowledge-base__ul knowledge-base__ul_full">
            @include('blocks.knowledge-base-submenu-full', ['pages' => [$pages->first()], 'depth' => 1])
        </ul>
    </article>
</div>

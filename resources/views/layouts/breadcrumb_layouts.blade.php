<div class="breadcrumbs--container">
    <div class="box h-100">
            @if(!empty($breadcrumbs))
            {{ Breadcrumbs::render($breadcrumbs) }}
            @endif
{{--            <li class="breadcrumbs--container__elem d-flex"><a href="/">Главная</a></li>--}}
{{--            <li class="breadcrumbs--container__elem d-flex"><a href="/">Текстовая страница</a></li>--}}
    </div>
</div>

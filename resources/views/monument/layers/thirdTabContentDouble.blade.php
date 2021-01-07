<div class="tabs-content">
    <h3 class="tab__title">Информация о заказе:</h3>
    <!-- Размер памятника -->
    <div class="accordion accordion--green accordion--no-img active-acc">
        <p class="header--info__name header--info__name--white header--info__name--no-img">
            Размер памятника
        </p>
    </div>
    <div class="panel panel--white open p-0 ml-4">
        <!-- Стелла -->
        <div class="stella__params product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title product--tab__header">
                <p class="header--info__name">
                    Стелла:
                </p>
                @if(!empty($stella['first']))
                <p class="header--info__params">
                    высота
                    <span class="stella--height">{{$stella['first']['height']}}, </span>
                    ширина
                    <span class="stella--width">{{$stella['first']['width']}}, </span>
                    толщина
                    <span class="stella--thickness">{{$stella['first']['thickness']}}</span>
                </p>
                @endif
            </div>

            <p class="header--info__material">
                <img class="stella--material preview--material" src="#" alt="...">
            </p>

            <a id="change-stella" class="btn btn--pill bth--basket btn--border w-auto"  data-tab="equipment" data-accordion="accordion-stella" href="#">Изменить</a>
        </div>
        <!-- Тумба -->
        <div class="pedestals__params product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title product--tab__header">
                <p class="header--info__name">
                    Тумба:
                </p>
                @if(!empty($pedestal['first']))
                <p class="header--info__params">
                    высота
                    <span class="pedestals--height">{{$pedestal['first']['height']}}, </span>
                    ширина
                    <span class="pedestals--width">{{$pedestal['first']['width']}}, </span>
                    толщина
                    <span class="pedestals--thickness">{{$pedestal['first']['thickness']}}</span>
                </p>
                @endif
            </div>

            <p class="header--info__material">
                <img class="pedestals--material preview--material" src="#" alt="...">
            </p>

            <a id="change-pedestal" class="btn btn--pill bth--basket btn--border w-auto"  data-tab="equipment" data-accordion="accordion-pedestal" href="#">Изменить</a>
        </div>
        <!-- Цветник -->
        <div class="parterres__params product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title product--tab__header">
                <p class="header--info__name">
                    Цветник:
                </p>
                @if(!empty($parterre['first']))
                <p class="header--info__params">
                    высота
                    <span class="parterres--height">{{$parterre['first']['height']}}, </span>
                    ширина
                    <span class="parterres--width">{{$parterre['first']['width']}}, </span>
                    толщина
                    <span class="parterres--thickness">{{$parterre['first']['thickness_size']}}</span>
                </p>
                @endif
            </div>

            <p class="header--info__material">
                <img class="parterres--material preview--material" src="#" alt="...">
            </p>

            <a id="change-parterre" class="btn btn--pill bth--basket btn--border w-auto"  data-tab="equipment" data-accordion="accordion-parterre" href="#">Изменить</a>
        </div>
        <!-- Надгробная плита -->
        <div class="tombstones__params product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title product--tab__header">
                <p class="header--info__name">
                    Надгробная плита:
                </p>
                @if(!empty($tombstone['first']))
                <p class="header--info__params">
                    высота
                    <span class="tombstones--height">{{$tombstone['first']['height']}}, </span>
                    ширина
                    <span class="tombstones--width">{{$tombstone['first']['width']}}, </span>
                    толщина
                    <span class="tombstones--thickness">{{$tombstone['first']['thickness']}}</span>
                </p>
                @endif
            </div>

            <p class="header--info__material">
                <img class="tombstones--material preview--material" src="#" alt="...">
            </p>

            <a id="change-tombstone" class="btn btn--pill bth--basket btn--border w-auto"  data-tab="equipment" data-accordion="accordion-tombstone" href="#">Изменить</a>
        </div>
    </div>


    <div class="accordion accordion--green active-acc">
        <p class="header--info__name header--info__name--white header--info__name--no-img">
            Оформление памятника
        </p>
    </div>
    <div class="panel panel--white open p-0 ml-4">
        <!-- Портрет: -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="stella__name">
                    Портрет:
                </p>

                <p class="header--info__params">
                    <span class="engraving__result"></span>
                </p>
            </div>

            <a id="change-portrait" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-portrait" href="#">Изменить</a>
        </div>
        <!-- Фамилия Имя Отчество -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="stella__name">
                    Фамилия Имя Отчество:
                </p>

                <p class="header--info__params">
                    <span class="surname_left"></span>
                    <span class="name_left"></span>
                    <span class="patronymic_left"></span>
                </p>

                <p class="header--info__params">
                    <span class="surname_right"></span>
                    <span class="name_right"></span>
                    <span class="patronymic_right"></span>
                </p>
            </div>

            <a id="change-initials" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-initials" href="#">Изменить</a>
        </div>
        <!-- Памятные даты -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="stella__name">
                    Памятные даты:
                </p>

                <p class="header--info__params">
                    <span class="left_date_of_birth"></span>
                    <span> - </span>
                    <span class="left_date_of_die"></span>
                </p>
                <p class="header--info__params">
                    <span class="right_date_of_birth"></span>
                    <span> - </span>
                    <span class="right_date_of_die"></span>
                </p>
            </div>

            <a id="change-memorable-dates" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-memorable-dates" href="#">Изменить</a>
        </div>
        <!-- Эпитафия на надгробье -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="stella__name">
                    Эпитафия на надгробье:
                </p>

                <p class="header--info__params">
                    <span class="on_pedestal_epitaph"></span>
                </p>
                <p class="header--info__params">
                    <span class="left_epitaph"></span>
                </p>
                <p class="header--info__params">
                    <span class="right_epitaph"></span>
                </p>
            </div>

            <a id="change-epitaph" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-epitaph" href="#">Изменить</a>
        </div>
        <!-- Рисунок на стелу -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img" id="stella__name">
                    Рисунок на стелу:
                </p>

                <p class="header--info__params">
                    <span class="left-stella_image"></span>
                </p>
                <p class="header--info__params">
                    <span class="right-stella_image"></span>
                </p>
            </div>

            <a id="change-stella-drawing" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-stella-drawing" href="#">Изменить</a>
        </div>
        <!-- Рисунок на надгробную плиту -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Эпитафия на тумбу:
                </p>

                <p class="header--info__params">
                    <span class="left-tombstone_image"></span>
                </p>
                <p class="header--info__params">
                    <span class="right-tombstone_image"></span>
                </p>
            </div>

            <a id="change-tombstone-drawing" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-tombstone-drawing" href="#">Изменить</a>
        </div>

    </div>

</div>

<div class="tabs-content">
    <h3 class="tab__title">Информация о заказе:</h3>
    <!--Параметры саркофага -->
    <div class="accordion accordion--green accordion--no-img active-acc">
        <p class="header--info__name header--info__name--white header--info__name--no-img">
            Параметры саркофага
        </p>
    </div>
    <div class="panel panel--white open p-0 ml-4">
        <ul class="sarcophagus__props">
            <li class="sarcophagus__prop sarcophagus__prop--blue">
                <div class="sarcophagus__prop-name">Тип</div>
                <div class="sarcophagus__prop-value">{{$product->type->name ?? 'Одиночный комплекс'}}</div>
            </li>
            <li class="sarcophagus__prop sarcophagus__prop--blue">
                <div class="sarcophagus__prop-name">Материал</div>
                <div class="sarcophagus__prop-value">{{$product->material->name ?? 'Габбро-диабаз/дымовский гранит'}}</div>
            </li>
            <li class="sarcophagus__prop sarcophagus__prop--blue">
                <div class="sarcophagus__prop-name">Размер</div>
                <div class="sarcophagus__prop-value">{{$product->size ?? '250x250x250'}}</div>
            </li>
            <li class="sarcophagus__prop sarcophagus__prop--blue">
                <div class="sarcophagus__prop-name">Вес</div>
                <div class="sarcophagus__prop-value">{{$product->weight ?? '150 кг'}}.</div>
            </li>
        </ul>
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
            </div>

            <a id="change-stella-drawing" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-stella-drawing" href="#">Изменить</a>
        </div>
        <!-- Рисунок на надгробную плиту -->
        <div class="product--body__row product--body__row--blue flex-wrap d-flex ai-center py-12 pl-11 pr-15 mb-2">
            <div class="accordion__title">
                <p class="header--info__name header--info__name--no-img">
                    Рисунок на надгробную плиту:
                </p>

                <p class="header--info__params">
                    <span class="left-tombstone_image"></span>
                </p>
            </div>

            <a id="change-tombstone-drawing" class="btn btn--pill bth--basket btn--border w-auto ml-auto"  data-tab="registration" data-accordion="accordion-tombstone-drawing" href="#">Изменить</a>
        </div>

    </div>

</div>

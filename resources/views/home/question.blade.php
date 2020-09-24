@extends('layouts.home_layouts')

@section('footer')
    <script src="{{URL::asset('assets/js/page.contact.js')}}"></script>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')

    <div class="lightGreen-bg">
        <div class="box flex-wrap main--content question">
            <h2 class="title--orange">Контакты</h2>
            <div class="contacts--section col-50 d-flex col">
                @if($contact_us)
                    @foreach($contact_us as $val)
                        <span class="contacts--section__title">{{$val->title}}</span>
                        <span class="contacts--section__inform">{{$val->content}}</span>
                    @endforeach
                @else
                    <span class="contacts--section__title">Контактная информация</span>
                    <span class="contacts--section__inform">Возникли вопросы по приобретению аксессуаров из кожи в нашем
                        интернет-магазине — позвоните или напишите нам. Хотите сделать оптовый заказ для юридических лиц
                        или у вас возникли вопросы по сотрудничеству?</span>
                @endif
                @if(!$site_contacts['phone']->isEmpty())
                    <div class="contacts--section__details d-flex flex-wrap ai-center">
                    @foreach($site_contacts['phone'] as $site_contact)
                        <div class="col-50 d-flex ai-center">
                            <a class="contacts--details_phone d-flex ai-center" href="tel:{{$site_contact->contact}}">{{$site_contact->contact}}</a>
                            <a class="contacts--details_viber d-flex ai-center" href="tel:{{$site_contact->contact}}">
                                <img src="{{URL::asset('assets/img/viber.svg')}}" alt="...">
                            </a>
                        </div>
                    @endforeach
                        @else
                            @for($i = 0; $i <4;$i++)
                            <a class="contacts--details_phone col-50 d-flex ai-center" href="tel:+375113985688">
                                +375113985688
                                <img src="{{URL::asset('assets/img/viber.svg')}}" alt="">
                            </a>
                        @endfor
                    </div>
                @endif
            @foreach($site_contacts['email'] as $val)
                    <a class="contacts--details_email col-50 d-flex ai-center" href="mailto:{{$val->contact}}">
                        <img src="{{URL::asset('assets/img/email.svg')}}" alt="">
                        {{$val->contact}}
                    </a>
            @endforeach
            @if($work_hours)
                @foreach($work_hours as $val)
                    <span class="contacts--details_worktime col-100 d-flex ai-center">{{$val->content}}</span>
                @endforeach
                        @else
                            <span class="contacts--details_worktime col-100 d-flex ai-center">
                                Время работы: пн-пт 10:00-20:00
                            </span>
            @endif
            </div>
            <span class="contacts--section__title">Наши адреса</span>
            <ul class="contacts--section__adress d-flex col">
                @if($site_contacts)
                @foreach($site_contacts['address'] as $val)
                        <li class="adress--item d-flex ai-center">
                            <img src="{{URL::asset('assets/img/location.svg')}}" alt="">
                            <span> {{$val->contact}}</span>
                        </li>
                @endforeach
                @else
                    <li class="adress--item d-flex ai-center">
                        <img src="{{URL::asset('assets/img/location.svg')}}" alt="">
                        <span>220000, г. Минск ул. Уручская 23А</span>
                    </li>
                @endif
            </ul>
        </div>
    <div class="contacts--section col-50 d-flex col">
        <form action="{{route('send.question')}}" class="form_question contacts--form" method="post" id="contactsForm">
            <span class="contacts--section__title">Задать вопрос</span>
            @csrf
            <div class="form--fied">
                <input class="form--input col-100" type="text" placeholder="Ваша фамилия" required name="last_name">
            </div>
            <div class="form--fied">
                <input class="form--input col-100" type="text" placeholder="Ваше имя" required name="first_name">
            </div>
            <div class="form--fied">
                <input class="form--input col-100" type="email" placeholder="E-mail" required name="contact_email">
            </div>
            <div class="form--fied">
                <input id="contactsForm-tel" class="form--input col-100" type="text" placeholder="Телефон для связи" required name="contact_phone">
            </div>
            <div class="form--fied">
                <textarea class="form--textarea col-100" name="contact_message" required placeholder="Сообщение"></textarea>
            </div>
            <button class="btn orange btn-success d-flex ai-center justify-center" type="submit">Задать вопрос</button>
        </form>
    </div>


{{--    <div class="contacts--employers col-100 d-flex flex-wrap">--}}
{{--        <span class="contacts--section__title d-flex col-100 justify-center">Наши сотрудники</span>--}}
{{--        @foreach($employees as $employee)--}}
{{--            <div class="contacts--employer d-flex col col-25 ai-center">--}}
{{--                <img  src="{{url('storage').'/'.$employee->image}}" class="contacts--employer__img">--}}
{{--                <span class="contacts--employer__name">{{$employee->name}}</span>--}}
{{--                <span class="contacts--employer__position">{{$employee->position}}</span>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
    <div class="modal" id="questionModal" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Успешно</h5>
            <p>Мы получили обращение. Наш менеджер свяжется с вами в ближайшее время.</p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>
    <div class="modal" id="decorSuccess" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-content d-flex col ai-center justify-center">
            <h5 class="modal-title">Успешно</h5>
            <p>Товар успешно добавлен в корзину</p>
            <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
        </div>
    </div>
@endsection

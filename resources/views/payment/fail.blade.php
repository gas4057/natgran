@extends('layouts.home_layouts')

@section('footer')
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')

    <div class="order-succes">
        <div class="box">
            <div class="familiar--products d-flex w-100 col">
                @if($article)
                <div class="section--title__name text-center mb-30">{!! $article->title !!}</div>

                <div class="order-succes__message">
                    <span>Ваш заказ № </span>
                    <span id="order-succes-number-order">{{$orderInfo['order_id']}}</span>
                    <span> от </span>
                    <span id="order-succes-date-order">{{$orderInfo['date']}}</span>
                    <span> не был сформирован. В ближайшее время с вами свяжется наш менеджер для обсуждения условий заказа.</span>
                </div>

                <div class="order-succes__body">
                    <div class="order-succes__img-wrap">
                        <img class="order-succes__img" src="{{$article->image ?  Storage::url($article->image)  : URL::asset('assets/img/quote-image.png')}}" alt="...">
                    </div>

                    <div class="order-succes__content">
                        @foreach($article->block as $block)
                            <div>{!! $block->text_block !!}</div>
                        @endforeach
                    </div>

                </div>
                @endif
            </div>
        </div>
    </div>

    @include('recommendedCart.index')

@endsection

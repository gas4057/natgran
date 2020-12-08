@extends('layouts.home_layouts')

@section('content')

    @include('layouts.breadcrumb_layouts')
 <div class="dirtyWhite--bg">
    <div class="box flex-wrap main--content">
        <h2 class="title--orange">Акции</h2>
        <div class="actions--section d-flex flex-wrap">
            @if(!$offers->isEmpty())
                @foreach($offers as $val)
                    <a class="action--item d-flex col" href="{{route('special.offers.id',$val->id)}}">
                        <img src="{{$val->image? Storage::url($val->image) : URL::asset('assets/img/gallery-img.jpg')}}" />
                        <div class="action--item__info d-flex col">
                            <div class="action--item__link" href="{{route('special.offers.id',$val->id)}}">{!! $val->title!!}</div>
                            @if($val->is_actual == 'true')
                                <span class="action--active d-flex ai-center justify-center">
                                    {{ Date::parse($val->date_start)->format('j F ') }} - {{ Date::parse($val->date_end)->format('j F ') }}
                                </span>
                            @else
                                <span class="action--disabled d-flex ai-center justify-center">Акция закончилась</span>
                            @endif

                            <p class="action--item__text">{{$val->desc}}</p>
                        </div>
                    </a>
                @endforeach
                {{$offers->links()}}
            @else
                <p>Акций нет</p>
            @endif
        </div>
    </div>
</div>
@endsection

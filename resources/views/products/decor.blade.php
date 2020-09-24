@extends('layouts.home_layouts')

@section('head')
    <title>Продукция</title>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')
    <div class="product">
        <div class="box flex-wrap main--content">
            <div class="news--section d-flex flex-wrap">

                <div class="news--section">
                    <h2 class="title--orange">Декор</h2>

                    <div class="familiar--body">
                        @if(!$products->isEmpty())
                            @foreach($products as $val)
                                @if($loop->iteration >4)
                                    <a class="familiar--item" href="{{route('products.type',$val->id)}}">
                                        <div class="familiar--img-wrap">
                                            <img src="{{$val->image !=null ? Storage::url($val->image) : URL::asset('/images/demo/pamyatnik_dvoinoy.jpg')}}" alt="..." class="familiar--img">
                                        </div>

                                        <div class="familiar--content">
                                            <h3 class="familiar--title">{{$val->name}}</h3>
                                            <p class="familiar--text">{{$val->info}}</p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    <div class="divider-catalog"></div>

                    <h2 class="title--orange">Продукция</h2>

                    <div class="familiar--body">
                        @if(!$products->isEmpty())
                            @foreach($products as $val)
                                @if($loop->iteration <5)
                                    <a class="familiar--item" href="{{route('products.type',$val->id)}}">
                                        <div class="familiar--img-wrap">
                                            <img src="{{$val->image !=null ? Storage::url($val->image) : URL::asset('/images/demo/pamyatnik_dvoinoy.jpg')}}" alt="..." class="familiar--img">
                                        </div>

                                        <div class="familiar--content">
                                            <h3 class="familiar--title">{{$val->name}}</h3>
                                            <p class="familiar--text">{{$val->info}}</p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection

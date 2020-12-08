@extends('layouts.home_layouts')

@section('footer')
    <script src="{{URL::asset('assets/js/page.contact.js')}}"></script>
@endsection

@section('content')

    @include('layouts.breadcrumb_layouts')
<div class="dirtyWhite--bg">
    <div class="box flex-wrap main--content">
        <h2 class="title--orange">{{$pageTitle}}</h2>
        <div class="gallery--section d-flex flex-wrap w-100" >
    @if(!$images->isEmpty())
        @foreach($images as $val)
            <div class="gallery--item d-flex col">
                <a href="{{ Storage::url($val->image)}}" data-fancybox="images">
                    <img src="{{ Storage::url($val->image)}}">
                    <div class="gallery--item__info d-flex col">
                        <span class="gallery--item__name">{!! $val->title !!}</span>
                        <p class="gallery--item__text">{!! $val->desc !!}</p>
                        <p class="gallery--fullText">{!! $val->desc !!}</p>
                    </div>
                </a>
            <div>
        </div>
    </div>
        @endforeach
        {{$images->links()}}
    @else
        <p>Изображений нет</p>
    @endif
</div>


@endsection

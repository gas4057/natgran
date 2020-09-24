@extends('layouts.home_layouts')

@section('content')

  @if($news)

      @include('layouts.breadcrumb_layouts')
  <div class="dirtyWhite--bg">
    <div class="box flex-wrap main--content">
      <h2 class="title--orange">Новости</h2>
      <div class="news--section d-flex flex-wrap">
        @foreach($news as $val)
          <a class="news--item d-flex" href="{{route('news.id',$val->id)}}">
            <img src="{{$val->image ? Storage::url($val->image) : URL::asset('assets/img/news-image.jpg')}}">
            <div class="news--item__info d-flex col">
              <div class="news--item__link">{!! $val->title !!}</div>
              <p class="news--item__text">{!! $val->short_desc !!}</p>
            </div>
          </a>
        @endforeach
        <nav aria-label="Page navigation" class="page-navigation">
          {{ $news->links() }}
        </nav>
      </div>
    </div>
  @endif

@endsection

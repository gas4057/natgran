@extends('layouts.home_layouts')

@section('head')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection
@section('footer')
    <script src="{{URL::asset('assets/js/page.order_set_attributes.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/libs.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/html.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/settings.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/tree.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/OrbitControls.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/OBJLoader.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/MTLLoader.js')}}"></script>
    <script src="{{URL::asset('assets/js/front/scripts.js')}}"></script>

    {{--added today--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>You're Total:{{$total}}</h4>
            <form>

                @csrf
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection

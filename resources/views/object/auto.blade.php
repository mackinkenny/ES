@extends('layouts.app')
@section('styles')

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

@endsection
@section('content')

    <div class="row justify-content-center">
    <div class="col-8">
        <div class="mb-5 text-center">
            <span style="font-size:40px;">{{$auto->name}}</span>
        </div>
        <div class="owl-carousel owl-theme col-8 m-auto" >
            @foreach($photos as $photo)
                <div class="item">
                    <img src="/image/autophoto/{{$photo->img_path}}" alt="">
                </div>
            @endforeach
        </div>
        <br>

        <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
            <div class="punkt p-2" style="float: left;">
                Информация
            </div>
            <div class="data p-2" style="float: right; width:400px;">
                {{$auto->info}}
            </div>
            <div style="clear: both;"></div>
        </div>
        <br>

        <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
            <div class="punkt p-2" style="float: left; ">
                Цена
            </div>
            <div class="data p-2" style="float: right; width:400px;">
                {{$auto->price}}
            </div>
            <div style="clear: both;"></div>
        </div>
        <br>
        <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
            <div class="punkt p-2" style="float: left;">
                Адресс
            </div>
            <div class="data p-2" style="float: right; width:400px;">
                {{$auto->address}}
            </div>
            <div style="clear: both;"></div>
        </div>
        <br>
        <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
            <div class="punkt p-2" style="float: left;">
                Контакты
            </div>
            <div class="data p-2" style="float: right; width:400px;">
                {{$auto->contact}}
            </div>
            <div style="clear: both;"></div>
        </div>

    </div>
    </div>
@endsection
@section('javascripts')

    <script type="text/javascript" src="{{ asset('/css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,
                items: 1,
                margin: 0,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                dots: false,
                animateOut: 'fadeOut',
                nav: true,
                navText: ['<i class="fas fa-2x fa-chevron-left d-none d-md-block"></i>',
                    '<i class="fas fa-2x fa-chevron-right d-none d-md-block"></i>']
            });
        });
    </script>

@endsection
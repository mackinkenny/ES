@extends('layouts.app')
@section('styles')

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="mb-5 text-center">
                <span style="font-size:35px;">{{$object->name}}</span>
            </div>
            @if(!$photos->isEmpty())
                <div class="row mb-5 justify-content-center">
                    <div class="owl-carousel owl-theme col-10" style=" padding:12px; background-image:url(images/stipes2.png); background-size: 100px 100px;" >
            {{--<div class="owl-carousel owl-theme col-8 m-auto" >--}}
                @foreach($photos as $photo)
                    <div class="item">
                        <img src="/image/photo/{{$photo->img_path}}" class="w-100" alt="">
                    </div>
                @endforeach
            {{--</div>--}}
                    </div>
                </div>
            @else
                <div class="col-8 m-auto" >
                <img src="/image/photo/{{$object->img_path}}" class="w-100" alt="">
                </div>
            @endif
            <br>

            <div class="col-10 m-auto" style="border:1.5px solid #e9ecef; border-radius: 12px;">
                <div class="punkt p-2" style="float: left;">
                    Информация
                </div>

                <div class="data p-2" style="float: right; width:400px;">
                    {{$object->info}}
                </div>
                <div style="clear: both;"></div>
            </div>
            <br>
            @if($object->price != null)
            <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
                <div class="punkt p-2" style="float: left; ">
                    Цена
                </div>

                <div class="data p-2" style="float: right; width:400px;">
                    {{$object->price}}
                </div>

                <div style="clear: both;"></div>
            </div>
            <br>
            @endif
            @if($object->address != null)
            <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
                <div class="punkt p-2" style="float: left;">
                    Адресс
                </div>
                <div class="data p-2" style="float: right; width:400px;">
                    {{$object->address}}
                </div>
                <div style="clear: both;"></div>
            </div>
            <br>
            @endif
            @if($object->contact != null)
            <div class="col-10 m-auto" style="border:1px solid gray; border-radius: 12px;">
                <div class="punkt p-2" style="float: left;">
                    Контакты
                </div>
                <div class="data p-2" style="float: right; width:400px;">
                    {{$object->contact}}
                </div>
                <div style="clear: both;"></div>
            </div>
                @endif

        </div>
    </div>
</div>
@endsection
@section('javascripts')

    <script type="text/javascript" src="{{ asset('css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
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
@extends('layouts.app')
@section('styles')

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

@endsection
@section('content')
<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-8 object-form">
            <div class="mb-4 mt-4 text-center">
                <span style="font-size:30px; font-family: Forum; font-weight: bolder;">{{$object->name}}</span>
            </div>
            @if(!$photos->isEmpty() && $count != 1)
                <div class="position-absolute col-4 p-2" style="right:-40%; top:0%; background-color: #faf0d3; border-radius: 15px;"><span style="font-family: Forum; font-size: 16px;">Вы можете посмотреть все фото товара, пролистнув их (зажмите левую кнопку мыши на картинке и пролистните в сторону)</span></div>
                <div class="row mb-4 justify-content-center">
                    <div class="owl-carousel owl-theme col-10">
                @foreach($photos as $photo)
                    <div class="item">
                        <img src="/image/photo/{{$photo->img_path}}" alt="">
                    </div>
                @endforeach
                    </div>
                </div>
            @else
                <div class="col-8 m-auto" >
                <img src="/image/photo/{{$object->img_path}}" class="w-100" alt="">
                </div>
            @endif
            <br>

            <div class="row justify-content-center col-12">
                @if($object->price)
                <div class="col-3 object-par">Цена:</div>
                <div class="col-9 object-par">{{$object->price}}</div>
                @endif
                @if($object->contact)
                <div class="col-3 object-par">Контакты: </div>
                <div class="col-9 object-par">{{$object->contact}}</div>
                    @endif
                    @if($object->address)
                <div class="col-3 object-par">Адресс:</div>
                <div class="col-9 object-par">{{$object->address}}</div>
                        @endif

            </div><hr>
                <div class="data p-2">
                    {{$object->info}}
                </div>
                <div style="clear: both;"></div>
            <br>
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
@extends('layouts.app')
@section('content')

    <div class="row text-center" style="background:white;">
        <div class="col-12">
    <p style="font-size:25px; font-family: 'Times New Roman'; font-weight: lighter;">АЛМАШ - ПОРТАЛ ОБЪЯВЛЕНИЙ ПО БАРТЕРНОМУ ОБМЕНУ УСЛУГАМИ И ТОВАРАМИ</p>
    <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">Категории</p>
    </div>
    </div>
        <div class="row text-center justify-content-center p-5" style="background:white; border-bottom:1px solid black;">
            @foreach($categories as $category)
        <div class="col-4 cat">
                    <a href="/allshow/{{$category->id}}">
                    <img class="pt-2" src="/image/category/{{$category->img_path}}" alt="">
                    <br>
                    <br>
                    <p class="cat-text">{{$category->text}}</p>
                </a>
        </div>
                @endforeach


    </div>



@endsection
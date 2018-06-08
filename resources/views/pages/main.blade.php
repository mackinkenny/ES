@extends('layouts.app')
@section('content')

    {{--<div class="row justify-content-center">--}}

    {{--</div>--}}
<div class="container">
    <p class="text-center" style="font-size:35px; font-weight: bold;">Категории</p>
        <div class="row text-center justify-content-center p-5 w-100" style="background:white;">
            @foreach($categories as $category)
        <div class="col-4 cat">
                    <a href="/show/{{$category->id}}">
                    <img class="pt-2" src="/image/category/{{$category->img_path}}" alt="">
                    <br>
                    <br>
                    <p class="cat-text">{{$category->text}}</p>
                </a>
        </div>
                @endforeach
    </div>
</div>
    <div class="container">
        <hr>
        <div style="font-size:35px;text-align:center; font-weight: bolder;">Цель нашего сайта</div><hr>
        <div class="col-12 row mt-5">
            <div class="col-6" style="margin-top: 100px;">
        <iframe width="510px" height="270px" src="https://www.youtube.com/embed/hgTKRmtkbBM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
            <div class="col-5 ml-5">
                <div class="text-center">
                    <a href="http://diamondresort.kg/"><img src="/image/logo_test.png" class="w-50" style="margin-bottom: 20px;" alt=""></a>
                </div>
                <span style="font-size:17px; font-family: Forum;">
                    Эко-этно Коттеджный городок <strong>"Diamond Resort"</strong> на Иссык-Куле в селе Бостери, уникальный проект, не имеющий аналогов в Кыргызстане.
                    Коттеджный городок с превосходной инфраструктурой и отличным местонахождением.
                    Именно здесь даже самый прихотливый сможет найти все для комфортабельного проживания.
                    Комплекс сочетает в себе все необходимые факторы для прекрасного времяприпровождения: ласковое солнце, теплое озеро Иссык-Куль,
                    необыкновенной красоты ландшафтный дизайн, чистый воздух, известный еще со времен СССР пляж и минеральные источники.

                </span>
            </div>
            <div class="col-12 p-5">
                <span style="font-size:17px; font-family: Forum;">
                    Цель нашего сайта - это поддержание нашего объекта <strong>"Diamond Resort"</strong>. Все наши товары выставленные на портале используются для
                    обмена на нужные нам материалы и товары для строительства нашего городка. Если вы заинтересованы в наших товарах, вы можете оставить нам свое предложение в вкладке и мы с вами свяжемся.
                    Список приоритетных для нас товаров вы можете найти в вкладке "Список на обмен".

                 </span>
            </div>
        </div>
    </div>



@endsection
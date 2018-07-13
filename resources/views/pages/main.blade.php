@extends('layouts.app')
@section('content')

    {{--<div class="row justify-content-center">--}}

    {{--</div>--}}
<div class="container fadeIn animated">
    <p class="text-center mt-3 title-text" style="font-size:35px; font-weight: bold; font-family: 'Times New Roman'; letter-spacing: 2px;">Категории</p><hr>
        <div class="row text-center justify-content-center p-sm-5 w-100" style="background:white;">
            @foreach($categories as $category)
        <div class="col-4 cat">
                    <a href="/show/{{$category->id}}">
                    <img class="pt-2 cat-img" src="/image/category/{{$category->img_path}}" alt="">
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
        <div class="title-text fadeIn wow" style="font-size:35px;text-align:center; font-weight: bolder; font-family: 'Times New Roman'; letter-spacing: 2px;">Цель нашего сайта</div><hr>
        <div class="row mt-sm-5 p-2">
            <div class="col-sm-6 ml-sm-5 fadeInLeft wow" >
        <iframe class="main-video" src="https://www.youtube.com/embed/hgTKRmtkbBM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
            <div class="col-sm-5 fadeInRight wow">
                <div class="text-center mt-4 mt-sm-0">
                    <a href="http://diamondresort.kg/"><img src="/image/logo_test.png" class="w-50" style="margin-bottom: 20px;" alt=""></a>
                </div>
                <span style="font-size:16px; font-family: Forum;">
                    Эко-этно Коттеджный городок <strong>"Diamond Resort"</strong> на Иссык-Куле в селе Бостери, уникальный проект, не имеющий аналогов в Кыргызстане.
                    Коттеджный городок с превосходной инфраструктурой и отличным местонахождением.
                    Именно здесь даже самый прихотливый сможет найти все для комфортабельного проживания.
                    Комплекс сочетает в себе все необходимые факторы для прекрасного времяприпровождения: ласковое солнце, теплое озеро Иссык-Куль,
                    необыкновенной красоты ландшафтный дизайн, чистый воздух, известный еще со времен СССР пляж и минеральные источники.

                </span>
            </div>
            <div class="col-12 mt-5">
                <span class="fadeInUpBig wow" style="font-size:20px; font-family: Forum;">
                    Цель нашего сайта - это поддержание нашего объекта <strong>"Diamond Resort"</strong>. Все наши товары выставленные на портале используются для
                    обмена на нужные нам материалы и товары для строительства нашего городка. Если вы заинтересованы в наших товарах, вы можете оставить нам свое предложение во вкладке <strong>"Оставить предложение"</strong> и мы с вами свяжемся.
                    <strong>Наши товары выделенны штампом "Almash.kg".</strong>
                    Список приоритетных для нас товаров вы можете найти в вкладке <strong>"Список на бартер"</strong>.

                 </span>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
    <div class="row col-12 justify-content-center mt-5">
            <div class="col-4 fadeInLeft wow"><img class="w-100" src="/image/house.png" alt=""></div>
            <div class="col-4 text-center fadeInUp wow"><img class="w-25 mt-5" src="/image/switch.png" alt=""></div>
            <div class="col-4 fadeInRight wow"><img class="w-100" src="/image/car.png" alt=""></div>
        <div class="p-5"><span style="font-size:20px; font-family: Forum;" class="fadeInUpBig wow">
                    Вы также можете предложить ваше имущество в обмен на недвижимость в нашем городке <strong>Diamond Resort</strong>. Мы рассматриваем
                варианты на обмен движимого и недвижимого имущества, также на большой спектр строительной техники и материалов в зависимости от необходимости.
                С подробной информацией вы можете ознакомиться связавшись с нами по телефону или по электронной почте.
                 </span></div>

    </div>
    </div>


@endsection
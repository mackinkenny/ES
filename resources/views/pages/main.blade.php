@extends('layouts.app')
@section('content')

    {{--<div class="row justify-content-center">--}}

    {{--</div>--}}
<div class="container">
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
        <div class="title-text" style="font-size:35px;text-align:center; font-weight: bolder; font-family: 'Times New Roman'; letter-spacing: 2px;">Цель нашего сайта</div><hr>
        <div class="row mt-sm-5 p-2">
            <div class="col-sm-6 ml-sm-5" >
        <iframe class="main-video" src="https://www.youtube.com/embed/hgTKRmtkbBM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
            <div class="col-sm-5">
                <div class="text-center mt-4 mt-sm-0">
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
            <div class="col-12 mt-5">
                <span style="font-size:17px; font-family: Forum;">
                    Цель нашего сайта - это поддержание нашего объекта <strong>"Diamond Resort"</strong>. Все наши товары выставленные на портале используются для
                    обмена на нужные нам материалы и товары для строительства нашего городка. Если вы заинтересованы в наших товарах, вы можете оставить нам свое предложение во вкладке <strong>"Оставить предложение"</strong> и мы с вами свяжемся.
                    <strong>Наши товары выделенны штампом "Almash.kg".</strong>
                    Список приоритетных для нас товаров вы можете найти в вкладке <strong>"Список на бартер"</strong>.

                 </span>
            </div>
        </div>
    </div>
    <hr>
    <div class="row col-12 justify-content-center mt-5">
            @foreach($products as $product)
            <div class="row col-sm-5 p-sm-4 p-2 mb-2 mr-sm-5 ml-3" style="background:#f9f9f9;">
                @if($product->img_path != null)
                <div class="col-sm-4 col-3 text-script">
                    <a href="/showproduct/{{$product->id}}"><div class="img-prod" style="background-image: url('/../image/photo/{{$product->img_path}}');">
                            @if($product->our == 1)
                                <img class="stamp" src="/image/main.png" style="position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                            @endif
                        </div></a>

                </div>
                <div class="col-8 text-script">
                    <div class="col-12 text-script">
                        <a href="/showproduct/{{$product->id}}" class="main-text-2 ml-sm-3"><?= str_limit($product->name, 30) ?></a>
                    </div><br>
                    <div class="col-12 text-script">

                        <span class="ml-sm-3 mr-sm-5 mr-4">{{$product->parent_name}}</span>

                        <span>{{$product->created_at}}</span>
                    </div><br>
                    <div class="col-12 ml-sm-3 text-script">
                        <span><?= str_limit($product->info, 80) ?></span>
                    </div>
                </div>
                    @else
                        <div class="col-12">
                            @if($product->our == 1)
                                <img class="stamp" src="/image/main.png" style="position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                            @endif
                            <a href="/showproduct/{{$product->id}}" class="main-text ml-sm-3"><?= str_limit($product->name, 30) ?></a>
                        </div><br>
                        <div class="col-12 text-script">

                            <span class="ml-sm-3 mr-5">{{$product->parent_name}}</span>

                            <span class="mr-5">{{$product->created_at}}</span>
                        </div><br>
                        <div class="col-12 ml-sm-3 mt-2 text-script">
                            <span><?= str_limit($product->info, 80) ?></span>
                        </div>
                @endif

            </div>

            @endforeach
    </div>


@endsection
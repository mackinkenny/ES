@extends('layouts.app')
@section('content')
    <div class="row col-12 justify-content-center p-5">
        <div class="col-12 text-center">
            <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
        </div>

        <div class="col-3">
            <p class="left-menu-cat">Категории</p>
            @foreach($autotypes as $autotype)
                <div class="left-cat">
                <hr>
                <a href="/autotype/{{$autotype->id}}" class="autotyper text-a " style="font-size: 16px!important;" id="{{$autotype->id}}">
                    <p>{{$autotype->name}}</p>
                </a>
                </div>
            @endforeach
        </div>
        <div class="col-8">
            <div class="col-12 p-3" id="ajax-autotypes">

                        {{--<div class="col-4">--}}
                            {{--<img class="w-100" src="/image/truck.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="col-8">--}}
                            {{--<div class="col-12">--}}
                                {{--<a href="" class="text-a ml-3">Грузовик</a><hr>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 text-script">--}}
                                {{--<span class="ml-3 mr-5">Cпецтехника и транспорт</span>--}}
                                {{--<span class="mr-5">г.Бишкек</span>--}}
                                {{--<span class="mr-5">28.05.2018</span>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 ml-3 mt-2 text-script">--}}
                                {{--<span >Погрузочный транспорт. Предназначенный для перевозки груза разного вида в больших обьемах и на большое расстояние.</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}


            </div>
        </div>
    </div>
@endsection
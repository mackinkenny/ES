@extends('layouts.app')
@section('content')

    <div class="row text-center w-100" style="background:white;">
        <div class="col-12">
    <p style="font-size:25px; font-family: 'Times New Roman'; font-weight: lighter;">АЛМАШ - ПОРТАЛ ОБЪЯВЛЕНИЙ ПО БАРТЕРНОМУ ОБМЕНУ УСЛУГАМИ И ТОВАРАМИ</p>
    <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">Категории</p>
    </div>
    </div>
        <div class="row text-center justify-content-center p-5 w-100" style="background:white; border-bottom:1px solid black;">
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
    <div>
    <div class="row pr-0 mr-0" style="border-top: 1px solid black; border-bottom: 1px solid black;">
        <div class="col-6 p-5"><hr><p class="text-center" style="font-family: 'Times New Roman'; font-size: 34px;">Алмаш</p><hr>
            <div class="p-4"><span>Портал объявлений по бартерному обмену услугами и товарами.</span>
            <span>Обмен может производится по всей территории страны.</span></div>
        </div>
        <div class="col-6 p-5"><img src="/image/country.png" class="w-100"></div>

    </div>
    </div>
    {{--@foreach($objects as $object)--}}
        {{--<div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">--}}
            {{--<div class="col-4">--}}
                {{--<img class="w-100" src="/image/servicephoto/{{$object->img_path}}" alt="">--}}
            {{--</div>--}}
            {{--<div class="col-8">--}}
                {{--<div class="col-12">--}}
                    {{--<a href="" class="text-a ml-3">{{$object->name}}</a><hr>--}}
                {{--</div>--}}
                {{--<div class="col-12 text-script">--}}
                    {{--<span class="ml-3 mr-5">{{$object->servicetype_name}}</span>--}}
                    {{--<span class="mr-5">{{$object->address}}</span>--}}
                    {{--<span class="mr-5">{{$object->created_at}}</span>--}}
                {{--</div>--}}
                {{--<div class="col-12 ml-3 mt-2 text-script">--}}
                    {{--<span>{{$object->info}}</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="col-12 text-center" style="font-size: 30px;">
                Услуги
            </div>
            @foreach($services as $service)
                <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                    <div class="col-4">
                        <img class="w-75" src="/image/photo/{{$service->img_path}}" alt="">
                </div>
                    <div class="col-8">
                        <div class="col-12">
                            <a href="/showservice/{{$service->id}}" class="text-a ml-3">{{$service->name}}</a><hr>
                        </div>
                        <div class="col-12" style="color:#6c757d; font-size: 11px;">
                            <span class="ml-3 mr-4">{{$service->type_name}}</span>
                            <span class="mr-4">{{$service->address}}</span>
                            <span class="mr-4">{{$service->created_at}}</span>
                        </div>
                        <div class="col-12 ml-3 mt-2 text-script">
                            <span>{{$service->info}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-6">
            <div class="col-12 text-center" style="font-size: 30px;">
                Недвижимость
            </div>
            @foreach($builds as $build)
                <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                    <div class="col-4">
                        <img class="w-75" src="/image/photo/{{$build->img_path}}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <a href="/showbuild/{{$build->id}}" class="text-a ml-3">{{$build->name}}</a><hr>
                        </div>
                        <div class="col-12" style="color:#6c757d; font-size: 11px;">
                            <span class="ml-3 mr-4">{{$build->type_name}}</span>
                            <span class="mr-4">{{$build->address}}</span>
                            <span class="mr-4">{{$build->created_at}}</span>
                        </div>
                        <div class="col-12 ml-3 mt-2 text-script">
                            <span>{{$build->info}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-6">
            <div class="col-12 text-center" style="font-size: 30px;">
                Электроприборы
            </div>
            @foreach($electros as $electro)
                <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                    <div class="col-4">
                        <img class="w-75" src="/image/photo/{{$electro->img_path}}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <a href="/showelectro/{{$electro->id}}" class="text-a ml-3">{{$electro->name}}</a><hr>
                        </div>
                        <div class="col-12" style="color:#6c757d; font-size: 11px;">
                            <span class="ml-3 mr-4">{{$electro->type_name}}</span>
                            <span class="mr-4">{{$electro->address}}</span>
                            <span class="mr-4">{{$electro->created_at}}</span>
                        </div>
                        <div class="col-12 ml-3 mt-2 text-script">
                            <span>{{$electro->info}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-6">
            <div class="col-12 text-center" style="font-size: 30px;">
                Материалы
            </div>
            @foreach($materials as $material)
                <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                    <div class="col-4">
                        <img class="w-75" src="/image/photo/{{$material->img_path}}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <a href="/showmaterial/{{$material->id}}" class="text-a ml-3">{{$material->name}}</a><hr>
                        </div>
                        <div class="col-12" style="color:#6c757d; font-size: 11px;">
                            <span class="ml-3 mr-4">{{$material->type_name}}</span>
                            <span class="mr-4">{{$material->address}}</span>
                            <span class="mr-4">{{$material->created_at}}</span>
                        </div>
                        <div class="col-12 ml-3 mt-2 text-script">
                            <span>{{$material->info}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
@extends('layouts.app')
@section('content')
    <div class="row col-12 justify-content-center p-5">
        <div class="col-12 text-center">
            <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
        </div>

        <div class="col-2">
            <div class="left-cat">
                <a class="all text-a" href="">
                    <p class="">Все категории</p>
                </a>
            </div>
            @foreach($materialtypes as $materialtype)
                <div class="left-cat">
                    <hr>
                    <a class="materialtyper text-a" href="" style="font-size: 16px!important;" id="{{ $materialtype->id }}">
                        <p>{{$materialtype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-materialtypes">

                @foreach($materials as $material)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <img class="w-100" src="/image/photo/{{$material->img_path}}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showmaterial/{{$material->id}}" class="text-a ml-3">{{$material->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">
                                <span class="ml-3 mr-5">{{$material->type_name}}</span>
                                <span class="mr-5">{{$material->address}}</span>
                                <span class="mr-5">{{$material->created_at}}</span>
                            </div>
                            <div class="col-12 ml-3 mt-2 text-script">
                                <span>{{$material->info}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
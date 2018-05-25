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
            @foreach($electrotypes as $electrotype)
                <div class="left-cat">
                    <hr>
                    <a class="electrotyper text-a" href="" style="font-size: 16px!important;" id="{{ $electrotype->id }}">
                        <p>{{$electrotype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-electrotypes">

                @foreach($electros as $electro)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <img class="w-100" src="/image/photo/{{$electro->img_path}}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showelectro/{{$electro->id}}" class="text-a ml-3">{{$electro->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">
                                <span class="ml-3 mr-5">{{$electro->type_name}}</span>
                                <span class="mr-5">{{$electro->address}}</span>
                                <span class="mr-5">{{$electro->created_at}}</span>
                            </div>
                            <div class="col-12 ml-3 mt-2 text-script">
                                <span>{{$electro->info}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
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
            @foreach($tooltypes as $tooltype)
                <div class="left-cat">
                    <hr>
                    <a class="tooltyper text-a" href="" style="font-size: 16px!important;" id="{{ $tooltype->id }}">
                        <p>{{$tooltype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-tooltypes">

                @foreach($tools as $tool)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <img class="w-100" src="/image/photo/{{$tool->img_path}}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showtool/{{$tool->id}}" class="text-a ml-3">{{$tool->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">
                                <span class="ml-3 mr-5">{{$tool->type_name}}</span>
                                <span class="mr-5">{{$tool->address}}</span>
                                <span class="mr-5">{{$tool->created_at}}</span>
                            </div>
                            <div class="col-12 ml-3 mt-2 text-script">
                                <span>{{$tool->info}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
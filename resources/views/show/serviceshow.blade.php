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
            @foreach($servicetypes as $servicetype)
                <div class="left-cat">
                    <hr>
                    <a class="servicetyper text-a" href="" style="font-size: 16px!important;" id="{{ $servicetype->id }}">
                        <p>{{$servicetype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-servicetypes">

                @foreach($services as $service)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <img class="w-100" src="/image/photo/{{$service->img_path}}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showservice/{{$service->id}}" class="text-a ml-3">{{$service->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">
                                <span class="ml-3 mr-5">{{$service->type_name}}</span>
                                <span class="mr-5">{{$service->address}}</span>
                                <span class="mr-5">{{$service->created_at}}</span>
                            </div>
                            <div class="col-12 ml-3 mt-2 text-script">
                                <span>{{$service->info}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
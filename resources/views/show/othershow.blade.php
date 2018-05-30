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
            @foreach($othertypes as $othertype)
                <div class="left-cat">
                    <hr>
                    <a class="othertyper text-a" href="" style="font-size: 16px!important;" id="{{ $othertype->id }}">
                        <p>{{$othertype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-othertypes">

                @foreach($others as $other)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <a href="/showother/{{$other->id}}"><img class="w-75" src="/image/photo/{{$other->img_path}}" alt=""></a>
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showother/{{$other->id}}" class="text-a ml-3">{{$other->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">

                                <span class="ml-3 mr-5">{{$other->type_name}}</span>
                                @if($other->address != null)
                                    <span class="mr-5">{{$other->address}}</span>
                                @endif
                                <span class="mr-5">{{$other->created_at}}</span><hr>
                            </div>
                            <div class="col-12 ml-3 mt-2 text-script">
                                <span>{{$other->info}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
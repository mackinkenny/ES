@extends('layouts.app')
@section('content')
    <div class="row col-12 justify-content-center p-5">
        <div class="col-12 text-center">
            <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
        </div>

        <div class="col-3">
            <div class="left-cat">
            <a class="all text-a" href="">
            <p class="">Все категории</p>
            </a>
            </div>
            @foreach($autotypes as $autotype)
                <div class="left-cat">
                <hr>
                <a class="autotyper text-a" href="" style="font-size: 16px!important;" id="{{ $autotype->id }}">
                    <p>{{$autotype->name}}</p>
                </a>
                </div>
            @endforeach
        </div>
        <div class="col-8">
            <div class="col-12 p-3" id="ajax-autotypes">
                @foreach($autos as $auto)
                <div class="row col-12 p-4 ml-1" style="background:#e9ecef;">
                    <div class="col-4">
                        <img class="w-100" src="/image/autophoto/{{$auto->img_path}}" alt="">
                        </div>
                    <div class="col-8">
                        <div class="col-12">
                            <a href="" class="text-a ml-3">{{$auto->name}}</a><hr>
                            </div>
                        <div class="col-12 text-script">
                            <span class="ml-3 mr-5">{{$auto->autotype_name}}</span>
                            <span class="mr-5">{{$auto->address}}</span>
                            <span class="mr-5">{{$auto->created_at}}</span>
                            </div>
                        <div class="col-12 ml-3 mt-2 text-script">
                            <span>{{$auto->info}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
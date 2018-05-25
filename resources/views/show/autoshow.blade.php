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
            @foreach($autotypes as $autotype)
                <div class="left-cat">
                    <hr>
                    <a class="autotyper text-a" href="" style="font-size: 16px!important;" id="{{ $autotype->id }}">
                        <p>{{$autotype->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-9">
            <div class="col-12 p-3" id="ajax-autotypes">

                @foreach($autos as $auto)
                    <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                        <div class="col-4">
                            <a href="/showauto/{{$auto->id}}"><img class="w-75" src="/image/photo/{{$auto->img_path}}" alt=""></a>
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <a href="/showauto/{{$auto->id}}" class="text-a ml-3">{{$auto->name}}</a><hr>
                            </div>
                            <div class="col-12 text-script">

                                <span class="ml-3 mr-5">{{$auto->type_name}}</span>
                                @if($auto->address != null)
                                <span class="mr-5">{{$auto->address}}</span>
                                @endif
                                <span class="mr-5">{{$auto->created_at}}</span><hr>
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
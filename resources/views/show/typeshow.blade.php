@extends('layouts.app')
@section('content')
    <div class="container">
        @if(!$types->isEmpty())
        <div class="row col-12 justify-content-center pad-0">
            <div class="col-12 text-center">
                <p class="title-text fadeIn animated" style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
            </div>

            <div class="col-2 pad-0-1 ">
                <div style="position: sticky; top:10%;">
                    <div class="left-cat fadeIn animated">
                    <a class="all text-a" href="" id="{{$category->id}}">
                        <p class="">Все категории</p>
                    </a>
                </div>
                @foreach($types as $type)
                    <div class="left-cat fadeIn animated">
                        <hr>
                        <a class="typer text-a" href="" id="{{ $type->id }}">
                            <p>{{$type->name}}</p>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-10 pad-0">
                <div class="col-12 p-sm-3 p-0 test" id="ajax-types">

                    @foreach($products as $product)
                        <div class="row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn wow" style="background:#f9f9f9;">
                            @if($product->img_path != null)
                            <div class="col-sm-4 col-3 text-script-2">
                                <a href="/showproduct/{{$product->id}}"><div class="img-prod" style="background-image: url('/../image/photo/{{$product->img_path}}');">
                                       @if($product->our == 1)
                                            <img class="stamp-2" src="/image/main.png" style="position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                                        @endif
                                    </div></a>

                            </div>
                            <div class="col-sm-8 col-9 text-script pad-0">
                                <div class="col-12 text-script pad-0">
                                    <a href="/showproduct/{{$product->id}}" class="main-text ml-sm-3"><?= str_limit($product->name, 45) ?></a>
                                </div>
                                <div class="col-12 text-script">

                                    <span class="ml-sm-3 mr-sm-5 mr-4">{{$product->parent_name}}</span>

                                    <span>{{$product->created_at}}</span>
                                </div>
                                <div class="col-12 ml-sm-3 text-script">
                                    <span><?= str_limit($product->info, 270) ?></span>
                                </div>
                            </div>
                                @else

                                    <div class="col-12 text-script">
                                        @if($product->our == 1)
                                            <img class="stamp-2" src="/image/main.png" style="position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                                        @endif
                                        <a href="/showproduct/{{$product->id}}" class="main-text ml-sm-3"><?= str_limit($product->name, 45) ?></a>
                                    </div>
                                    <div class="col-12 text-script">

                                        <span class="ml-sm-3 mr-sm-5 mr-4">{{$product->parent_name}}</span>

                                        <span>{{$product->created_at}}</span>
                                    </div>
                                    <div class="col-12 ml-sm-3 text-script">
                                        <span><?= str_limit($product->info, 270) ?></span>
                                    </div>
                                @endif
                            </div>
                    @endforeach

                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
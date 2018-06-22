@extends('layouts.app')
@section('content')
    <div class="container">
        @if(!$types->isEmpty())
        <div class="row col-12 justify-content-center">
            <div class="col-12 text-center">
                <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
            </div>

            <div class="col-2">
                <div style="position: sticky; top:10%;">
                    <div class="left-cat">
                    <a class="all text-a" href="" id="{{$category->id}}">
                        <p class="">Все категории</p>
                    </a>
                </div>
                @foreach($types as $type)
                    <div class="left-cat">
                        <hr>
                        <a class="typer text-a" href="" style="font-size: 16px!important;" id="{{ $type->id }}">
                            <p>{{$type->name}}</p>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-9">
                <div class="col-12 p-3" id="ajax-types">

                    @foreach($products as $product)
                        <div class="row col-12 p-4 ml-1 mb-2" style="background:#f9f9f9;">
                            @if($product->img_path != null)
                            <div class="col-4">
                                <a href="/showproduct/{{$product->id}}"><div class="img-prod" style="background-image: url('/../image/photo/{{$product->img_path}}');">
                                       @if($product->our == 1)
                                            <img src="/image/Almash.png" style="position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                                        @endif
                                    </div></a>

                            </div>
                            <div class="col-8">
                                <div class="col-12">
                                    <a href="/showproduct/{{$product->id}}" class="main-text ml-3"><?= str_limit($product->name, 45) ?></a><hr>
                                </div>
                                <div class="col-12 text-script">

                                    <span class="ml-3 mr-5">{{$product->parent_name}}</span>

                                    <span class="mr-5">{{$product->created_at}}</span><hr>
                                </div>
                                <div class="col-12 ml-3 mt-2 text-script">
                                    <span><?= str_limit($product->info, 270) ?></span>
                                </div>
                            </div>
                                @else

                                    <div class="col-12">
                                        @if($product->our == 1)
                                            <img src="/image/Almash.png" style="position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)" alt="">
                                        @endif
                                        <a href="/showproduct/{{$product->id}}" class="main-text ml-3"><?= str_limit($product->name, 45) ?></a><hr>
                                    </div>
                                    <div class="col-12 text-script">

                                        <span class="ml-3 mr-5">{{$product->parent_name}}</span>

                                        <span class="mr-5">{{$product->created_at}}</span><hr>
                                    </div>
                                    <div class="col-12 ml-3 mt-2 text-script">
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
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-12 justify-content-center">
            <div class="col-12 text-center">
                <p style="font-size:45px; font-family: 'Times New Roman'; font-weight: lighter;">{{$category->name}}</p>
            </div>

            <div class="col-2" style="position: fixed; top:40%;left:5%;">
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
            <div class="col-9">
                <div class="col-12 p-3" id="ajax-types">

                    @foreach($products as $product)
                        <div class="row col-12 p-4 ml-1 mb-2" style="background:#e9ecef;">
                            <div class="col-4">
                                <a href="/showproduct/{{$product->id}}"><div class="img-prod" style="background-image: url('/../image/photo/{{$product->img_path}}');"></div></a>
                            </div>
                            <div class="col-8">
                                <div class="col-12">
                                    <a href="/showproduct/{{$product->id}}" class="main-text ml-3"><?= str_limit($product->name, 45) ?></a><hr>
                                </div>
                                <div class="col-12 text-script">

                                    <span class="ml-3 mr-5">{{$product->parent_name}}</span>
                                    @if($product->address != null)
                                        <span class="mr-5">{{$product->address}}</span>
                                    @endif
                                    <span class="mr-5">{{$product->created_at}}</span><hr>
                                </div>
                                <div class="col-12 ml-3 mt-2 text-script">
                                    <span><?= str_limit($product->info, 270) ?></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
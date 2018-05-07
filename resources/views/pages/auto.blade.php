@extends('layouts.app')
@section('content')

            <div class="col-8" style="background:white; position: relative;">

                @if($autos)
                    @if($type)
                    <div class="text-center">
                    <span style="font-size:40px;">{{$type->name}}</span>
                </div>
                    @endif
                    @foreach($autos as $auto)
                <a href="/showauto/{{$auto->id}}" style="text-decoration: none; color:black;">
                <div class="row col-12 cat mb-2" style="background-color: #e9ecef;">

                    <div class="col-3"><img src="/image/autophoto/{{$auto->img_path}}" style="width:100%; border:3px solid black;"></div>
                    <div class="col-3 text-center"><span style="font-size:14px;">Название</span><br>
                    <span style="font-size:20px;">{{$auto->name}}</span></div>
                    <div class="col-2 text-center"><span style="font-size:14px;">Цена</span><br>
                        <span style="font-size:20px;">{{$auto->price}}</span></div>
                    <div class="col-2 text-center"><span style="font-size:14px;">Адресс</span><br>
                        <span style="font-size:15px;">{{$auto->address}}</span></div>
                    <div class="col-2 text-center"><span style="font-size:14px;">Дата</span><br>
                        <span style="font-size:15px;">{{$auto->created_at}}</span></div>

                </div>
                </a>
                    @endforeach
                @endif
            </div>
@endsection
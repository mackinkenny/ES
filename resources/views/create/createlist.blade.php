@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <div class="col-12 mb-5">
                    <span style="font-size:35px; font-weight: bold; font-family: 'Times New Roman'; letter-spacing: 2px;">Выберите категорию</span>
                </div>
                @foreach($categories as $category)
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createproduct/{{$category->id}}">{{$category->name}}</a><br>
                <hr>
                    @endforeach
            </div>
            @if(Auth::user()->status == 1)
            <div class="col-6 text-center">
                <div class="col-12 mb-5">
                    <span style="font-size:30px; font-weight:lighter;">Создать типы</span>
                </div>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createtype">Типы</a><br>
                <hr>

            </div>
                @endif
        </div>
    </div>
@endsection
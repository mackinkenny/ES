@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <div class="col-12 mb-5">
                    <span style="font-size:30px; font-weight:lighter;">Создать товары</span>
                </div>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createservice">Услуги</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createauto">Техника</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuild">Недвижимость</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuildmaterial">Материалы</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuildtool">Инструменты</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createelectro">Электроприборы</a><br>
                <hr>
            </div>
            <div class="col-6 text-center">
                <div class="col-12 mb-5">
                    <span style="font-size:30px; font-weight:lighter;">Создать типы</span>
                </div>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createservicetype">Типы услуг</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createautotype">Типы техники</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuildtype">Типы недвижимости</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuildmaterialtype">Типы материалов</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createbuildtooltype">Типы инструментов</a><br>
                <hr>
                <a style="font-size:20px; font-weight: lighter; color:black;" href="/createelectrotype">Типы электроприборов</a><br>
                <hr>
            </div>
        </div>
    </div>
@endsection
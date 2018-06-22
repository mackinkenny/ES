@extends('layouts.app')
@section('content')

<div class="text-center">
    <h1 class="m-5" style="font-size: 30px; font-weight: bold;">Ваше предложение</h1>
</div>
<div class="position-absolute col-2 p-2" style="right:15%; top:60%; background-color: #faf0d3; border-radius: 15px;"><span style="font-family: Forum; font-size: 16px;">Заполните все поля, в противном случае ваше предложение не будет отправленно</span></div>
<div class="row col-md-12 col-md-offset-1 justify-content-center ">
    <form class="forma p-4" action="{{ route('message') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mt-2"><label class="create-label" for="name">Имя*</label><input type="text" name="name" style="float:right; width:60%;"></div><hr>
        <div class="mt-2"><label class="create-label" for="contact">Телефон*</label><input type="text" name="contact" style="float:right; width:60%;"></div><hr>
        <div class="mt-2"><label class="create-label" for="text">Сообщение*</label><br>
            <textarea name="text" maxlength="10000" style="width: 400px; height: 100px"></textarea></div><hr>
        <button type="submit" class="btn btn-danger mt-2">Отправить</button>
    </form>
</div>

@endsection
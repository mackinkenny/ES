@extends('layouts.app')
@section('content')



    <div class="col-md-12 col-md-offset-1">
        <div class="container">
            <div class="row col-12 mt-5" >
                <div class="col-2 p-2" style="font-family: Forum; font-size: 18px;" >Имя</div>
                <div class="col-3 p-2" style="font-family: Forum; font-size: 18px;" >Номер телефона</div>
                <div class="col-5 p-2" style="font-family: Forum; font-size: 18px;" >Сообщение</div>
                <div class="col-2 p-2" style="font-family: Forum; font-size: 18px;" >Дата и время</div>
            </div>
            <hr>
        @foreach($messages as $message)
        <div class="row col-12" style="background:#f9f9f9;">
        <div class="col-2 p-2" style="font-family: Forum; font-size: 16px;" ><?= str_limit($message->name, 20) ?></div>
            <div class="col-3 p-2" style="font-family: Forum; font-size: 16px;" ><?= str_limit($message->contact, 30) ?></div>
            <div class="col-5 p-2" style="font-family: Forum; font-size: 16px;" ><?= str_limit($message->text, 50) ?></div>
            <div class="col-2 p-2" style="font-family: Forum; font-size: 16px;" >{{$message->created_at}}</div>
        </div>
            @endforeach
        </div>
    </div>

@endsection
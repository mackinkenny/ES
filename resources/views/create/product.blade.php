@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-md-offset-1 justify-content-center">
    <div class="text-center col-12 mb-5" style="font-size:35px; font-weight: bold; font-family: 'Times New Roman'; letter-spacing: 2px;">{{$category->name}}</div>
    <div class="position-absolute col-2 p-2" style="right:17%; top:20%; background-color: #faf0d3; border-radius: 15px;"><span style="font-family: Forum; font-size: 16px;">Заполните все поля помеченные *, это обязательные поля. При не заполнении ваше объявление не будет выставленно!</span></div>
    <form class="forma p-4" action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mt-2"><label class="create-label" for="name">Заголовок*</label><input type="text" name="name" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="info">Информация*</label><br>
            <textarea name="info" maxlength="10000" style="width: 340px; height: 100px"></textarea></div><hr>
        <div class="mt-2"><label class="create-label" for="price">Цена</label><input type="text" name="price" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="address">Адресс</label><input type="text" name="address" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="contact">Контакты*</label><input type="text" name="contact" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="parent_id">Категория*</label><select name="parent_id" class="js-example-basic-single" style="float:right;">
                @foreach($types as $type)

                    <option value="{{ $type->id }}">{{ $type->name }}</option>

                @endforeach
            </select></div>
        <div class="mt-3"><label for="img_paths[]">Фото</label><input type="file" style="float:right;" name="img_paths[]" multiple ></div>
        <button type="submit" class="btn btn-danger mt-3">Опубликовать</button>
    </form>
</div>
@endsection
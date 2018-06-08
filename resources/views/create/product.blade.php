<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

</head>
<body>
<div class="text-center">
    <h1 class="m-5" style="font-size: 30px; font-weight: bold;">Создать Технику</h1>
</div>
<div class="row col-md-12 col-md-offset-1 justify-content-center ">
    <form class="forma p-4" action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mt-2"><label class="create-label" for="name">Заголовок*</label><input type="text" name="name" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="info">Информация*</label><input type="text" name="info" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="price">Цена</label><input type="text" name="price" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="address">Адресс</label><input type="text" name="address" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="contact">Контакт</label><input type="text" name="contact" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="parent_id">Категория*</label><select name="parent_id" class="js-example-basic-single" style="float:right;">
                @foreach($types as $type)

                    <option value="{{ $type->id }}">{{ $type->name }}</option>

                @endforeach
            </select></div>
        <div class="mt-2"><label for="img_paths[]">Фото</label><input type="file" style="float:right;" name="img_paths[]" multiple ></div>
        <button type="submit" class="btn btn-danger mt-2">Опубликовать</button>
    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

</head>
<body>
<div class="text-center">
    <h1 class="m-5" style="font-size: 30px; font-weight: bold;">Создать тип техники</h1>
</div>
<div class="row col-md-12 col-md-offset-1 justify-content-center ">
    <form class="forma p-4" action="{{ route('storeautotype') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mt-2"><label class="create-label" for="name">Название типа*</label><input type="text" name="name" style="float:right;"></div><hr>
        <div class="mt-2"><label class="create-label" for="category_id">Категория*</label><select name="category_id" class="js-example-basic-single" style="float:right;">
                @foreach($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
            </select></div>
        <button type="submit" class="btn btn-danger mt-2">Создать</button>
    </form>
</div>
</body>
</html>

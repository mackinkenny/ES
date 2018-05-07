
<div class="col-md-10 col-md-offset-1">
    <form action="{{ route('storeauto') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="name">Name</label><input type="text" name="name">
        <label for="info">Info</label><input type="text" name="info">
        <label for="price">Price</label><input type="text" name="price">
        <label for="address">Address</label><input type="text" name="address">
        <label for="contact">Contact</label><input type="text" name="contact">
        <select name="type_id" class="js-example-basic-single">
            @foreach($types as $type)

                <option value="{{ $type->id }}">{{ $type->name }}</option>

            @endforeach
        </select>
        <label for="img_paths[]">Images</label><input type="file" name="img_paths[]" multiple>

        <button type="submit" class="btn btn-danger">Create</button>
    </form>
</div>
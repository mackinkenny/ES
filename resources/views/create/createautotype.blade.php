
<div class="col-md-10 col-md-offset-1">
    <form action="{{ route('storeautotype') }}" method="POST">
        {{ csrf_field() }}

        <label for="name">Type</label><input type="text" name="name">
        <select name="category_id" class="js-example-basic-single">
            @foreach($categories as $category)

                <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endforeach
        </select>

        <button type="submit" class="btn btn-danger">Create</button>
    </form>
</div>
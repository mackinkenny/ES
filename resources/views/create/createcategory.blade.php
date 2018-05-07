
<div class="col-md-10 col-md-offset-1">
    <form action="{{ route('storecategory') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="name">Category</label><input type="text" name="name">
        <label for="text">Text</label><input type="text" name="text">
        <input type="file" class="form-control" id="exampleInputPassword2" placeholder=""  name="img_path">

        <button type="submit" class="btn btn-danger">Create</button>
    </form>
</div>
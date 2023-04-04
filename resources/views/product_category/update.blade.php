<html>
<head>
    <title>Update</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\ProductController::class,'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$categories->id}}">
    <label>product_name</label>

    <input type="Submit">
</form>
</body>
</html>








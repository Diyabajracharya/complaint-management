<html>
<head>
    <title>Update</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$complaint->id}}">
    <label>Type:</label>
    <input type="text" name="type" value="" required>
    <label>Description:</label>
    <input type="text" name="description" required>
    <label> Image </label>
    <input type = "file" name="image" required>

    <input type="Submit">
</form>
</body>
</html>








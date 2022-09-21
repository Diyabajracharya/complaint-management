    <html>
    <head>
        <title>Create</title>
    </head>
    <body>
    <form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" enctype="multipart/form-data">
        @csrf
            <label>Type:</label>
            <input type="text" name="type" required>
            <label>Description:</label>
            <input type="text" name="description" required>
            <label> Image </label>
            <input type = "file" name="image" required>

            <input type="Submit">
    </form>
        </body>
        </html>








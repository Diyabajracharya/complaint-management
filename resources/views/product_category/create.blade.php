    <html>
    <head>
        <title>Create</title>
    </head>
    <body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
            @endforeach
            @endif
    <form method="post" action="{{action([\App\Http\Controllers\ProductController::class,'keep'])}}" enctype="multipart/form-data">
        @csrf
            <label>Category:</label>
            <input type="text" name="type" required>

            <input type="Submit">
    </form>
        </body>
        </html>








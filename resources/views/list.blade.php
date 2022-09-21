<html>
    <head> </head>
    <body>
    <a>button href={url{"/create"}}}<button>Create</button></a>
    <table>
        <tr>
            <th> type</th>
            <th> description</th>
            <th> image </th>
        </tr>
        @foreach($complaint as $complaint)
            <tr>
            <td> {{$complaint-> type }}</td>
                <td> {{$complaint-> description  }}</td>

                <td> <img src="{{asset('storage/image/' .$complaint-> image)}}"> </td>
                <td> href= "{url{'.$complaint->id}}}"</td>
            </tr>
        @endforeach
    </table>
    </body>
</html>

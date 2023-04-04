<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

</head>
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}" >Home</a>
            @else
                <a href="{{ route('login') }}" >Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" >Register</a>
                @endif
            @endauth
        </div>
@endif

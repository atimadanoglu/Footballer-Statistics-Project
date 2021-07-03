<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield("title") </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-light" style="background-color:  #5390D9   ;">
        <div>
            <a class="navbar-brand" href="#"><strong>Footballer Statistics</strong></a>
        </div>

        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route("footballers.index") }}">{{__("Footballers List")}}</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route("footballers.create") }}">{{__("New Footballer")}}</a>
                </li>
            </ul>
        </div>

    </nav>
    <div class="container mt-3" id="main">
        @yield("content")
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</div>

</body>
</html>


@extends("layouts.default")

@section("title", $footballer["name"])

@section("content")

    <h1 class="text-center">Showing <strong>{{ $footballer["name"]}}</strong></h1>

    <div class="jumbotron text-center">
        <h2>{{ $footballer["name"] }}</h2>
        <p>
            <strong>{{__("Club Name:")}}</strong> {{ $footballer["clubName"] }}<br>
            <strong>{{__("Age:")}}</strong> {{ $footballer["age"] }}<br>
            <strong>{{__("Match Count:")}}</strong> {{ $footballer["matchCount"] }}<br>
            <strong>{{__("Goal Count:")}}</strong> {{ $footballer["goalCount"] }}<br>
            <strong>{{__("Assist Count:")}}</strong> {{$footballer["assistCount"]}}
        </p>
    </div>

@endsection

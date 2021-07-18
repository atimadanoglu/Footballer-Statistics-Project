@extends("layouts.default")

@section("title", "Footballers List")

@section("content")

    <table class="table table-striped table-bordered">

        <tr>
            <th>ID</th>
            <th>Footballer Name</th>
            <th>Club Name</th>
            <th>Age</th>
            <th>Match Count</th>
            <th>Goal Count</th>
            <th>Assist Count</th>
            <th>Actions</th>
        </tr>
        @foreach($footballers as $footballer)
            <tr>
                <td>{{$footballer->id}}</td>
                <td>{{$footballer->name}}</td>
                <td>{{$footballer->clubName}}</td>
                <td>{{$footballer->age}}</td>
                <td>{{$footballer->matchCount}}</td>
                <td>{{$footballer->goalCount}}</td>
                <td>{{$footballer->assistCount}}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ route("footballers.show", ["footballer" => $footballer]) }}">Show this footballer</a><br>
                    <a class="btn btn-small btn-warning" href="{{ route("footballers.edit", ["footballer" => $footballer]) }}">Update this footballer</a><br>
                    <form action="{{ route("footballers.destroy", ["footballer" => $footballer]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete this footballer</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection


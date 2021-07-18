@extends("layouts.default")

@section("title", "Create a Footballer")

@section("content")

    <div id="inputFootballerStats">

        <form name="statsForm" method="POST" action="{{ route("footballers.store") }}">
            @csrf

            <div class="form-group row">
                <label for="name">{{ __("Enter the footballer name : ") }} </label>
                <input type="text" name="name" id="name" class="form-control @error("name") is-invalid @enderror" placeholder="Enter name">
                @error("name")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="clubName">{{ __("Enter the club name : ") }}</label>
                <input type="text" name="clubName" id="clubName" class="form-control @error("clubName") is-invalid @enderror" placeholder="Enter club name">
                @error("clubName")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="age">{{ __("Enter the footballer's age : ") }}</label>
                <input type="number" name="age" id="age" class="form-control @error("age") is-invalid @enderror" placeholder="Enter age">
                @error("age")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group row">
                <label for="matchCount">{{ __("Enter how many football matches he played : ") }}</label>
                <input type="number" name="matchCount" id="matchCount" class="form-control @error("matchCount") is-invalid @enderror" placeholder="Enter match count">
                @error("matchCount")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="goalCount">{{ __("Enter how many goals he scored : ") }}</label>
                <input type="number" name="goalCount" id="goalCount" class="form-control @error("goalCount") is-invalid @enderror" placeholder="Enter goal count">
                @error("goalCount")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="assistCount">{{ __("Enter how many assists he made : ") }}</label>
                <input type="number" name="assistCount" class="form-control @error("assistCount") is-invalid @enderror" id="assistCount" placeholder="Enter assist count">
                @error("assistCount")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Create a footballer') }}</button>
        </form>

    </div>


@endsection

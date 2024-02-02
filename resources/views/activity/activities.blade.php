@extends('layout')
@section('title')
    All Activities
@endsection
@section('content')
<body>
<main>
    <div class="container">
        <div class="activities">
            <br>
            @foreach ($activities as $activity)
                <div class="activity">
                    <a href="{{ route("showActivity", 
                        ["id" => $activity->id]) }}"><strong>Activity:</strong> {{ $activity->activity }}</a>
                    <p><strong>Intensity:</strong> {{ $activity->intensity }}</p>
                    <p><strong>Duration:</strong> {{ $activity->duration }} minutes</p>
                    <p><strong>Date:</strong> {{ $activity->date_of_activity }}</p>
                    <p><strong>Description:</strong> {{ $activity->description }}</p>
                    <br>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
</main>

</body>
@endsection
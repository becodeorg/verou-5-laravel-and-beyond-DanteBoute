@extends('layout')
@section('title')
    Activities
@endsection
@section('content')
<body>
<main>
    <div class="container">
        <div class="activities">
            <h2>All Activities</h2>
            @foreach ($activities as $activity)
                <div class="activity">
                    <a href="{{ route("showActivity", 
                        ["id" => $activity->id]) }}"><strong>Activity:</strong> {{ $activity->activity }}</a>
                    <br>
                    <br>
                    <p><strong>Intensity:</strong> {{ $activity->intensity }}</p>
                    <p><strong>Duration:</strong> {{ $activity->duration }} minutes</p>
                    <p><strong>Date:</strong> {{ $activity->date_of_activity }}</p>
                    <p><strong>Description:</strong> {{ $activity->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</main>

</body>
@endsection

@extends('layout')
@section('title')
Activity - {{ $activity->activity }}
@endsection
@section('content')
<div class="container">
    <h1>Activity Details</h1>
    <div class="activity-details">
        <p><strong>Activity:</strong> {{ $activity->activity }}</p>
        <p><strong>Intensity:</strong> {{ $activity->intensity }}</p>
        <p><strong>Duration:</strong> {{ $activity->duration }}</p>
        <p><strong>Date:</strong> {{ $activity->date_of_activity }}</p>
        <p><strong>Description:</strong> {{ $activity->description }}</p>
    </div>
</div>
@endsection
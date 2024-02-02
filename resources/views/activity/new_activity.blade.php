@extends('layout')
@section('title')
New Activity
@endsection
@section('content')
<main>
        <div class="container">
            <section id="new-activity" class="section">
                <h2>New Activity</h2>
                <form action="{{route("submitNewActivity")}}" class="activity-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="activity">Activity:</label>
                        <input type="text" id="activity" name="activity" required>
                    </div>
                    <div class="form-group">
                        <label for="intensity">Intensity Level (1-10):</label>
                        <input type="number" id="intensity" name="intensity" min="1" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (in minutes):</label>
                        <input type="number" id="duration" name="duration" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="date_of_activity">Date:</label>
                        <input type="date" id="date_of_activity" name="date_of_activity" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
                    </div>
                    <button type="submit">Add Activity</button>
                </form>
            </section>
        </div>
    </main>
@endsection
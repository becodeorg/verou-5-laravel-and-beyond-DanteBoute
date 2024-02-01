@extends('layout')

@section('title')
    Home
@endsection
@section('content')

    <main>
        <div class="container">
            <section id="all-activities" class="section">
                <h2>All Activities</h2>
                <ul>
                    <li>Activity 1 - Date: January 1, 2024</li>
                    <li>Activity 2 - Date: January 5, 2024</li>
                    <li>Activity 3 - Date: January 10, 2024</li>
                </ul>
            </section>

            <section id="recent-activities" class="section">
                <h2>Recent Activities</h2>
                <ul>
                    <li>Recent Activity 1 - Date: January 25, 2024</li>
                    <li>Recent Activity 2 - Date: January 28, 2024</li>
                    <li>Recent Activity 3 - Date: January 29, 2024</li>
                </ul>
            </section>
        </div>
    </main>
@endsection
</html>
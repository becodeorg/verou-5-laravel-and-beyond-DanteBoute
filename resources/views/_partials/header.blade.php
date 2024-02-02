<header>
    <div class="container">
        <h3>{{ auth()->user() ? auth()->user()->name : "Activity Tracker" }}</h3>
        <nav>
            <ul>
                <li><a href="{{ route("showHome") }}">Home</a></li>
                <li><a href="{{ route("showAllActivities") }}">All Activities</a></li>
                <li><a href="{{ route("showNewActivity") }}">New Activity</a></li>
                <li><a href="{{ route("showSignUp") }}">Sign Up</a></li>
                <li><a href="{{ route("showLogin") }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
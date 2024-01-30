<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="app.css">
</head>
<style>
/* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #333;
    padding: 20px 0;
}

header .container h1 {
    color: #fff;
    font-size: 24px;
    margin-bottom: 0;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

main {
    padding: 40px 0;
}

.activities {
    margin-top: 20px;
}

.activity {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.activity p {
    margin-bottom: 10px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

</style>
<body>

<header>
    <div class="container">
        <h1 class="pageTitle">Activities</h1>
        <nav>
            <ul>
                <li><a href="#all-activities">All Activities</a></li>
                <li><a href="#recent-activities">Recent Activities</a></li>
                <li><a href="#new-activity">New Activity</a></li>
                <li><a href="#sign-up">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <div class="activities">
            <h2>All Activities</h2>
            @foreach ($activities as $activity)
                <div class="activity">
                    <p><strong>Activity:</strong> {{ $activity->activity }}</p>
                    <p><strong>Intensity:</strong> {{ $activity->intensity }}</p>
                    <p><strong>Duration:</strong> {{ $activity->duration }} minutes</p>
                    <p><strong>Date:</strong> {{ $activity->date_of_activity }}</p>
                    <p><strong>Description:</strong> {{ $activity->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2024 Activity Tracker</p>
    </div>
</footer>

</body>
</html>

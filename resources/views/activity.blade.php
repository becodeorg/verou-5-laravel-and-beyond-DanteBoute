<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Details</title>
    <link rel="stylesheet" href="app.css"> <!-- Link to your CSS file -->
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

nav {
    background-color: #333;
    padding: 10px 0;
}

nav ul {
    list-style-type: none;
    text-align: center;
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

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.activity-details {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.activity-details p {
    margin-bottom: 10px;
}


</style>
<body>

<nav>
    <ul>
        <li><a href="{{ route("showHome") }}">Home</a></li>
        <li><a href="{{ route("showAllActivities") }}">All Activities</a></li>
        <li><a href="{{ route("showNewActivity") }}">New Activity</a></li>
        <li><a href="{{ route("showAllActivities") }}">Sign Up</a></li>
    </ul>
</nav>

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

</body>
</html>

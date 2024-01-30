<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>

</head>
<style>
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
    <nav>
        <ul>
            <li><a href="{{ route("showHome") }}">Home</a></li>
            <li><a href="{{ route("showAllActivities") }}">All Activities</a></li>
            <li><a href="{{ route("showNewActivity") }}">New Activity</a></li>
            <li><a href="{{ route("showAllActivities") }}">Sign Up</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Activity:</strong> {{ $activity->activity }}</h1>
    <p><strong>Intensity</strong> {{ $activity->intensity }}</p>
    <p><strong>Duration:</strong> {{ $activity->duration }}</p>
    <p><strong>Date:</strong> {{ $activity->date }}</p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Sport Activities</title>
    <link rel="stylesheet" href="style.css">
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
    margin-top: 10px;
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

.section {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    margin: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.section h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

section ul {
    list-style-type: none;
}

section ul li {
    margin-bottom: 10px;
    font-size: 16px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

/* Form Styles */

.activity-form, .signup-form {
    max-width: 500px;
    margin: 0 auto;
}

.activity-form .form-group, .signup-form .form-group {
    margin-bottom: 20px;
}

.activity-form label, .signup-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.activity-form input[type="text"], .activity-form input[type="date"], .activity-form input[type="number"], .activity-form textarea, .signup-form input[type="text"], .signup-form input[type="email"], .signup-form input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.activity-form textarea, .signup-form textarea {
    resize: vertical;
}

.activity-form button[type="submit"], .signup-form button[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.activity-form button[type="submit"]:hover, .signup-form button[type="submit"]:hover {
    background-color: #555;
}

</style>
<body>
    <header>
        <div class="container">
            <h1 class="pageTitle">Activity Tracker</h1>
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
            <section id="all-activities" class="section">
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
            </section>

            <section id="recent-activities" class="section">
                <h2>Recent Activities</h2>
                <ul>
                    <li>Recent Activity 1 - Date: January 25, 2024</li>
                    <li>Recent Activity 2 - Date: January 28, 2024</li>
                    <li>Recent Activity 3 - Date: January 29, 2024</li>
                </ul>
            </section>

            <section id="new-activity" class="section">
                <h2>New Activity</h2>
                <form class="activity-form">
                    <div class="form-group">
                        <label for="sport">Activity:</label>
                        <input type="text" id="sport" name="sport" required>
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
                        <label for="activity-date">Date:</label>
                        <input type="date" id="activity-date" name="activity-date" required>
                    </div>
                    <div class="form-group">
                        <label for="activity-description">Description:</label>
                        <textarea id="activity-description" name="activity-description" rows="4" required></textarea>
                    </div>
                    <button type="submit">Add Activity</button>
                </form>
            </section>

                <section id="sign-up" class="section">
                    <h2>Sign Up</h2>
                    <form class="signup-form">
                        <div class="form-group">
                            <label for="fullname">Full Name:</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password:</label>
                            <input type="password" id="confirm-password" name="confirm-password" required>
                        </div>
                        <button type="submit">Sign Up</button>
                    </form>
                </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Activity Tracker</p>
        </div>
    </footer>
</body>
</html>
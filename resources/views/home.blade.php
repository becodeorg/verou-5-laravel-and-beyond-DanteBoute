@extends('layout')
@section('content')
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
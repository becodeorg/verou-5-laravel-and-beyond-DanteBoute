<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>

</head>
<body>

    <div class="container">
        <h1>Activity:</strong> {{ $activity->activity }}</h1>
    <p><strong>Intensity</strong> {{ $activity->intensity }}</p>
    <p><strong>Duration:</strong> {{ $activity->duration }}</p>
    <p><strong>Date:</strong> {{ $activity->date }}</p>
    </div>
</body>
</html>
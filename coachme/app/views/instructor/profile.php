<!DOCTYPE html>
<html>
<head>
    <title>Instructor Profile</title>
</head>
<body>
    <h1>Welcome, <?= $instructor['name'] ?></h1>
    <p>Email: <?= $instructor['email'] ?></p>
    <p>Specialization: <?= $instructor['specialization'] ?></p>
    <p>Available From: <?= $instructor['available_from'] ?></p>
    <p>Available To: <?= $instructor['available_to'] ?></p>
    <a href="/instructor/bookings">View Bookings</a>
    <a href="/instructor/schedule">Manage Schedule</a>
</body>
</html>

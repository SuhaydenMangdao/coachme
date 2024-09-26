<!DOCTYPE html>
<html>
<head>
    <title>Your Bookings</title>
</head>
<body>
    <h1>Your Bookings</h1>
    <?php if ($bookings): ?>
        <ul>
            <?php foreach ($bookings as $booking): ?>
                <li>
                    Instructor: <?= $booking['instructor_name'] ?> 
                    Date: <?= $booking['date'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No bookings found.</p>
    <?php endif; ?>
</body>
</html>

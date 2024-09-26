<!DOCTYPE html>
<html>
<head>
    <title>Instructor Bookings</title>
</head>
<body>
    <h1>Your Bookings</h1>
    <?php if ($bookings): ?>
        <ul>
            <?php foreach ($bookings as $booking): ?>
                <li>
                    Client: <?= $booking['client_name'] ?> 
                    Date: <?= $booking['date'] ?>
                    <form action="/instructor/submitFeedback" method="POST">
                        <input type="hidden" name="booking_id" value="<?= $booking['id'] ?>">
                        <input type="text" name="feedback" placeholder="Leave feedback">
                        <button type="submit">Submit</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No bookings found.</p>
    <?php endif; ?>
</body>
</html>

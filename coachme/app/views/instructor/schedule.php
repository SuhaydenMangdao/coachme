<!DOCTYPE html>
<html>
<head>
    <title>Instructor Schedule</title>
</head>
<body>
    <h1>Your Schedule</h1>
    <?php if ($schedule): ?>
        <ul>
            <?php foreach ($schedule as $slot): ?>
                <li><?= $slot['day'] ?>: <?= $slot['time_from'] ?> - <?= $slot['time_to'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No schedule set.</p>
    <?php endif; ?>
</body>
</html>

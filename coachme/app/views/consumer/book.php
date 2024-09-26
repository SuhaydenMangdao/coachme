<!DOCTYPE html>
<html>
<head>
    <title>Book an Instructor</title>
</head>
<body>
    <h1>Book an Instructor</h1>
    <form action="/consumer/book-instructor" method="POST">
        <select name="instructor_id" required>
            <option value="">Select an Instructor</option>
            <?php foreach ($instructors as $instructor): ?>
                <option value="<?= $instructor['id'] ?>"><?= $instructor['name'] ?> - <?= $instructor['specialization'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="date" name="date" required>
        <button type="submit">Book Instructor</button>
    </form>
</body>
</html>

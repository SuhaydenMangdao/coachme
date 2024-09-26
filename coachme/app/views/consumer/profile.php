<!DOCTYPE html>
<html>
  <head>
    <title>Consumer Profile</title>
  </head>
  <body>
    <h1>
      Welcome,
      <?= $consumer['name'] ?>
    </h1>
    <p>
      Email:
      <?= $consumer['email'] ?>
    </p>
    <a href="/consumer/bookings">View Your Bookings</a>
    <a href="/consumer/book-instructor">Book an Instructor</a>
  </body>
</html>

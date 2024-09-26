<!-- all the names of the function can be call on routings -->

<?php

require_once 'app/models/consumer_model.php'; // Include Consumer Model

class ConsumerController {
    public function profile() {
        // Fetch consumer profile data
        $consumer = Consumer::getById($_SESSION['user_id']);
        include 'app/views/consumer/profile.php';
    }

    public function bookings() {
        // Fetch all bookings made by the consumer
        $bookings = Consumer::getBookings($_SESSION['user_id']);
        include 'app/views/consumer/bookings.php';
    }

    public function bookInstructor() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle booking logic
            Consumer::bookInstructor($_POST['instructor_id'], $_POST['date']);
            header("Location: /consumer/bookings");
        } else {
            // Fetch available instructors
            $instructors = Consumer::getAllInstructors();
            include 'app/views/consumer/book.php'; // Show booking page
        }
    }
}

?>

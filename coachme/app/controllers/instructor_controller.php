<!-- API -->

<?php
require_once 'app/models/instructor_model.php'; // Include Instructor Model

class InstructorController {
    public function profile() {
        // Fetch instructor profile data
        $instructor = Instructor::getById($_SESSION['user_id']);
        include 'app/views/instructor/profile.php';
    }

    public function bookings() {
        // Fetch all bookings made with the instructor
        $bookings = Instructor::getBookings($_SESSION['user_id']);
        include 'app/views/instructor/bookings.php';
    }

    public function schedule() {
        // Fetch instructor's schedule
        $schedule = Instructor::getSchedule($_SESSION['user_id']);
        include 'app/views/instructor/schedule.php';
    }

    public function submitFeedback() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle feedback submission
            Instructor::submitFeedback($_POST['booking_id'], $_POST['feedback']);
            header("Location: /instructor/bookings");
        }
    }
}


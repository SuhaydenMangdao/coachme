<!-- INSTRUCTOR MODEL -->
 <!-- This section is for instructor class function and this will be called by instructor_controller.php -->
<!-- This section includes connection of database -->
<?php

require_once 'config/db_connect.php'; //should i need to call this?

class Instructor {
    public static function getById($id) {
        $query = "SELECT * FROM instructors WHERE id = $1";
        $result = pg_query_params($GLOBALS['db'], $query, [$id]);
        return pg_fetch_assoc($result);
    }

    public static function getBookings($instructor_id) {
        $query = "SELECT * FROM bookings WHERE instructor_id = $1";
        $result = pg_query_params($GLOBALS['db'], $query, [$instructor_id]);
        return pg_fetch_all($result);
    }

    public static function getSchedule($instructor_id) {
        $query = "SELECT * FROM schedules WHERE instructor_id = $1";
        $result = pg_query_params($GLOBALS['db'], $query, [$instructor_id]);
        return pg_fetch_all($result);
    }

    public static function submitFeedback($booking_id, $feedback) {
        $query = "UPDATE bookings SET feedback = $1 WHERE id = $2";
        pg_query_params($GLOBALS['db'], $query, [$feedback, $booking_id]);
    }
}
?>




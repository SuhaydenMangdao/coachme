<!-- INSTRUCTOR MODEL -->
 <!-- This section is for instructor class function and this will be called by instructor_controller.php -->
<!-- This section includes connection of database -->

<?php
require_once 'config/db_connect.php'; //should i need to call this?

class Consumer {
    public static function getById($id) {
        $query = "SELECT * FROM consumers WHERE id = $1";
        $result = pg_query_params($GLOBALS['db'], $query, [$id]);
        return pg_fetch_assoc($result);
    }

    public static function getBookings($consumer_id) {
        $query = "SELECT * FROM bookings WHERE consumer_id = $1";
        $result = pg_query_params($GLOBALS['db'], $query, [$consumer_id]);
        return pg_fetch_all($result);
    }

    public static function getAllInstructors() {
        $query = "SELECT * FROM instructors";
        $result = pg_query($GLOBALS['db'], $query);
        return pg_fetch_all($result);
    }

    public static function bookInstructor($instructor_id, $date) {
        $query = "INSERT INTO bookings (instructor_id, consumer_id, date) VALUES ($1, $2, $3)";
        pg_query_params($GLOBALS['db'], $query, [$instructor_id, $_SESSION['user_id'], $date]);
    }
}
?>

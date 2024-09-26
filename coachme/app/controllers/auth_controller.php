<?php

class AuthController {
    public function login($user_type) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle login logic for consumer or instructor
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Authenticate user...
        } else {
            $user_type = $user_type; // Ensure it's available in login.php
            include 'app/auth-layout/login.php'; // Load shared login form
        }
    }
    

    public function register($user_type) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle registration logic for consumer or instructor
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // Additional fields for instructors
            if ($user_type === 'instructor') {
                $specialization = $_POST['specialization'];
                $available_from = $_POST['available_from'];
                $available_to = $_POST['available_to'];
            }
            // Store user in the database...
        } else {
            include 'app/auth-layout/register.php'; // Load shared registration form
        }
    }
}

?>

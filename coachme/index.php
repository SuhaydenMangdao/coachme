<!-- routings -->
<?php
// Autoload classes (if using an autoloader)
require_once 'app/controllers/auth_controller.php'; // Include the AuthController
require_once 'app/controllers/instructor_controller.php'; // Example for later use
require_once 'app/controllers/consumer_controller.php'; // Example for later use
require_once 'config/db_connect.php';

// Start the session
session_start();

// Get the current URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Initialize Controllers
$authController = new AuthController();
$instructorController = new InstructorController();  
$consumerController = new ConsumerController();  

// Define Routing
switch ($uri) {
    // Authentication
    case '/instructor/login':
        $authController->login('instructor');
        break;
    case '/instructor/register':
        $authController->register('instructor');
        break;
    case '/consumer/login':
        $authController->login('consumer');
        break;
    case '/consumer/register':
        $authController->register('consumer');
        break;

    // Instructor-specific
    case '/instructor/profile':
        $instructorController->profile();
        break;
    case '/instructor/bookings':
        $instructorController->bookings();
        break;
    case '/instructor/schedule':
        $instructorController->schedule();
        break;
    case '/instructor/submitFeedback':
        $instructorController->submitFeedback();
        break;

    // Consumer-specific
    case '/consumer/profile':
        $consumerController->profile();
        break;
    case '/consumer/bookings':
        $consumerController->bookings();
        break;
    case '/consumer/book-instructor':
        $consumerController->bookInstructor();
        break;

    default:
        echo "404 - Page Not Found";

        break;
}

?>





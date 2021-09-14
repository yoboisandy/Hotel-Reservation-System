<?php



session_start();
$base_url = 'http://localhost/Project/coding/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';


if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'home':
            $_SESSION['active_url'] = 'home';
            include 'Controller/SiteController.php';
            break;

        case 'about':
            $_SESSION['active_url'] = 'about';
            include 'Controller/AboutUsController.php';
            break;

        case 'contact':
            $_SESSION['active_url'] = 'contact';
            include 'Controller/ContactController.php';
            break;

        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'Controller/LoginController.php';
            break;

        case 'logout':
            $_SESSION['active_url'] = 'logout';
            include 'Controller/LogoutController.php';
            break;

        case 'accommodations':
            $_SESSION['active_url'] = 'accommodations';
            include 'Controller/AccommodationsController.php';
            break;

        case 'booking-form':
            $_SESSION['active_url'] = 'booking-form';
            include 'Controller/Booking-formController.php';
            break;

        case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'Controller/SignupController.php';
            break;

        case 'userProfile':
            $_SESSION['active_url'] = 'userProfile';
            include 'Controller/UserProfileController.php';
            break;
        case 'editUser':
            $_SESSION['active_url'] = 'editUser';
            include 'Controller/EditUserController.php';
            break;
        case 'booking':
            $_SESSION['active_url'] = 'booking';
            include 'Controller/BookingController.php';
            break;
        case 'editBooking':
            $_SESSION['active_url'] = 'editBooking';
            include 'Controller/EditBookingController.php';
            break;
        case 'reservation':
            $_SESSION['active_url'] = 'reservation';
            include 'Controller/ReservationController.php';
            break;
        case 'cancelBooking':
            $_SESSION['active_url'] = 'cancelBooking';
            include 'Controller/CancelBookingController.php';
            break;
        case 'checkAvailability':
            $_SESSION['active_url'] = 'checkAvailability';
            include 'Controller/CheckAvailabilityController.php';
            break;

        default:
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    $_SESSION['active_url'] = 'home';
    include 'Controller/SiteController.php';
}

<?php



session_start();
$base_url = 'http://localhost/Project/coding/Admin-Zone/';
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
        case 'logout':
            $_SESSION['active_url'] = 'logout';
            include 'Controller/LogoutController.php';
            break;
        case 'contact':
            $_SESSION['active_url'] = 'contact';
            include 'Controller/ContactController.php';
            break;
        case 'userManage':
            $_SESSION['active_url'] = 'userManage';
            include 'Controller/UserManageController.php';
            break;
        case 'accommodationManage':
            $_SESSION['active_url'] = 'accommodationManage';
            include 'Controller/AccommodationManageController.php';
            break;
        case 'addUser':
            $_SESSION['active_url'] = 'addUser';
            include 'Controller/AddUserController.php';
            break;
        case 'addRoom':
            $_SESSION['active_url'] = 'addRoom';
            include 'Controller/AddRoomController.php';
            break;
        case 'editRoom':
            $_SESSION['active_url'] = 'editRoom';
            include 'Controller/EditRoomController.php';
            break;
        case 'editUser':
            $_SESSION['active_url'] = 'editUser';
            include 'Controller/EditUserController.php';
            break;
        case 'userProfile':
            $_SESSION['active_url'] = 'userProfile';
            include 'Controller/UserProfileController.php';
            break;
        case 'deleteUser':
            $_SESSION['active_url'] = 'deleteUser';
            include 'Controller/DeleteUserController.php';
            break;
        case 'deleteRoom':
            $_SESSION['active_url'] = 'deleteRoom';
            include 'Controller/DeleteRoomController.php';
            break;
        case 'reservations':
            $_SESSION['active_url'] = 'reservations';
            include 'Controller/ReservationController.php';
            break;
        case 'editBooking':
            $_SESSION['active_url'] = 'editBooking';
            include 'Controller/EditBookingController.php';
            break;
        case 'deleteContactUs':
            $_SESSION['active_url'] = 'deleteContactUs';
            include 'Controller/DeleteContactUsController.php';
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

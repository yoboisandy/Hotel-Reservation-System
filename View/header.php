<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rise-n-Shine</title>
    <link rel="stylesheet" href="resource\custom_styles\style.css" type="text/css" />
    <link rel="stylesheet" href="resource\bootstrap\css\bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="resource\font awesome\css\all.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sh384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" /> -->
</head>

<body>
    <div class="main-container">
        <!-- Header start -->
        <nav class="navbar shadow sticky navbar-expand-lg navbar-light bg-colour">
            <div class="container">
                <a class="navbar-brand " href="<?php echo $base_url ?>?r=home"><img width="80" height="50" src="images\logo1.PNG" /><br />Rise-n-Shine</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span>Menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $_SESSION['active_url'] == 'home' ? 'active' : '' ?>" aria-current="page" href="<?php echo $base_url ?>?r=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $_SESSION['active_url'] == 'accommodations' ? 'active' : '' ?>" href="<?php echo $base_url ?>?r=accommodations">Accommodations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $_SESSION['active_url'] == 'about' ? 'active' : '' ?>" href="<?php echo $base_url ?>?r=about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo $_SESSION['active_url'] == 'contact' ? 'active' : '' ?>" href="<?php echo $base_url ?>?r=contact">Contact</a>
                        </li>

                        <?php
                        if (!empty($_SESSION['user']['login'])) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php echo $_SESSION['active_url'] == 'userprofile' ? 'active' : '' ?>  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $_SESSION['user']['user_name']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item nav-link" href="<?= $base_url ?>?r=booking">Bookings</a></li>
                                    <?php
                                    if ($_SESSION['user']['type'] == 1) {
                                    ?>
                                        <li><a class="dropdown-item nav-link" href="<?php echo $base_url ?>/Admin-Zone">Admin Panel</a></li>
                                    <?php } else { ?>
                                        <li><a class="dropdown-item nav-link" href="<?= $base_url ?>?r=userProfile&id=<?php echo $_SESSION['user']['user_id'] ?>">Profile</a></li>
                                    <?php } ?>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item nav-link" href="<?= $base_url ?>?r=logout">Log out</a></li>
                                </ul>
                            </li>
                        <?php  } else {
                        ?>
                            <li class="nav-item">
                                <a class="custom <?php echo $_SESSION['active_url'] == 'login' ? 'active' : '' ?>" id="custom" href="<?php echo $base_url ?>?r=login">Login/Register</a>
                            <?php } ?>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
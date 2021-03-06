<?php
if ($_SESSION['user']['type'] != 1) {
    header("location:../");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="resource/custom_styles/style.css" type="text/css" />
    <link rel="stylesheet" href="resource\bootstrap\css\bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="resource\font awesome\css\all.min.css" type="text/css" />
    <title>Rise-n-Shine | Admin-Panel</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        #content {
            margin-left: 250px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-toggleable-xl sticky flex-nowrap flex-row">
        <div class="container-fluid">
            <div>
                <span style="font-size:20px; cursor: pointer; margin-right:20px;margin-left:20px;" onclick="openNav()">&#9776; </span>
                <a class="navbar-brand float-left" style="margin-bottom:10px" href="../"><img width="80" height="50" src="images\logo1.PNG" /><br /></a>
            </div>

            <div>
                <ul class="nav navbar-nav flex-row ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>?r=home">Home</a>
                    </li>
                    <?php
                    if (!empty($_SESSION['user']['login'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>?r=userProfile&id=<?php echo $_SESSION['user']['user_id'] ?>">
                                <?php echo $_SESSION['user']['user_name'] ?></a>
                        </li>
                        <li class="nav-item"><a href="<?= $base_url ?>?r=logout" class="custom">Logout</a></li>
                    <?php  }
                    ?>
                </ul>
            </div>

        </div>
    </nav>

    <div class="row">
        <div>
            <div id="mySidenav" class="sidenav " style="width: 250px;display:block">
                <span class="close d-flex align-items-center justify-content-end">
                    <h4 style="padding-right:56px;color:#deac46;">Dashboard</h4>
                    <a href="javascript:void(0)" style="font-size: 30px; padding: 10px" onclick="closeNav()">&times;</a>
                </span>
                <a href="<?= $base_url ?>?r=home" onclick='closeNav()'>Home</a>
                <a href="<?= $base_url ?>?r=accommodationManage" onclick='closeNav()'>Accomodations</a>
                <a href="<?= $base_url ?>?r=contact" onclick='closeNav()'>Feedbacks</a>
                <a href="<?= $base_url ?>?r=userManage" onclick='closeNav()'>Users</a>
                <a href="<?= $base_url ?>?r=reservations" onclick='closeNav()'>Reservations</a>

            </div>
        </div>
    </div>
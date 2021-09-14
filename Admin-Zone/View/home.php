<?php include 'header.php' ?>

<section id="content" style="margin-top:100px;">
    <div class="d-flex justify-content-center">
        <h1 class="display-3">Welcome to Admin Dashboard</h1>
    </div>
    <div class="d-flex">
        <div class="container">
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fas fa-users"></i><span class="counter">
                            <?php
                            $count = countItem('user_tb');
                            echo $count ?? 0;
                            ?>
                        </span>
                        <a href="<?= $base_url ?>?r=userManage">
                            <p>Registered Members</p>
                        </a>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"> <i class="fas fa-hotel"></i> <span class="counter">
                            <?php
                            $count =  countReservations();
                            echo $count ?? 0;
                            ?>
                        </span>
                        <a href="<?= $base_url ?>?r=reservations">
                            <p>Total Reservations</p>
                        </a>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fas fa-bed"></i><span class="counter">
                            <?php
                            $count = totalRooms();
                            echo $count ?? 0;
                            ?>
                        </span>
                        <a href="<?= $base_url ?>?r=accommodationManage">
                            <p>Total Rooms</p>
                        </a>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-user"></i> <span class="counter">
                            <?php
                            $count = totalGuests();
                            echo $count ?? 0;
                            ?>
                        </span>
                        <a href="<?= $base_url ?>?r=reservations">
                            <p>Happy Guests</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .container {
        margin-top: 100px
    }

    a {
        text-decoration: none;
    }

    .counter-box {
        display: block;
        background: #f6f6f6;
        padding: 40px 20px 37px;
        text-align: center;
        border: 2px solid #deac46;
        border-radius: 10px;
        transition: 0.5s;
    }

    .counter-box p {
        margin: 5px 0 0;
        padding: 0;
        color: #909090;
        font-size: 18px;
        font-weight: 500;
        transition: 0.5s;

    }

    .counter-box i {
        font-size: 60px;
        margin: 0 0 15px;
        color: #d2d2d2;
        opacity: 0.7;
        transition: 0.5s;
    }

    .counter {
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #666;
        line-height: 28px;
        transition: 0.5s;

    }

    .counter-box.colored {
        background: #3acf87
    }

    .counter-box:hover p,
    .counter-box:hover .counter {
        color: white;
    }

    .counter-box:hover i {
        opacity: 1;
        font-size: 70px;
        color: white;

    }

    .counter-box:hover {
        background-color: #deac46;
    }
</style>


<?php include 'footer.php'; ?>
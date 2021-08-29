<?php include 'header.php' ?>

<section id="content" style="margin-top:100px;">
    <div class=" mx-5">

        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <H1>Rise-n-Shine Resort & Spa</H1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card shadow mb-3" style="border:1px solid #deac46;min-width:250px">
                    <div class="card-header" style="background-color: #deac46;color:white;">Total Registered Users</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title text-center fs-2">
                            <?php
                            $count = countItem('user_tb');
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card shadow mb-3" style="border:1px solid #deac46;min-width:250px">
                    <div class="card-header" style="background-color: #deac46;color:white;">Total Guests</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title text-center fs-2">
                            <?php
                            $count = totalRooms();
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card shadow mb-3" style="border:1px solid #deac46;min-width:250px">
                    <div class="card-header" style="background-color: #deac46;color:white;">Total Rooms</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title text-center fs-2">
                            <?php
                            $count = totalRooms();
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card shadow mb-3" style="border:1px solid #deac46;min-width:250px">
                    <div class="card-header" style="background-color: #deac46;color:white;">Total Suites</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title text-center fs-2">
                            <?php
                            $count = countItem('suites');
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card shadow mb-3" style="border:1px solid #deac46;min-width:250px">
                    <div class="card-header" style="background-color: #deac46;color:white;">Total Reservations</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title text-center fs-2">
                            <?php
                            $count = countItem('suites');
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
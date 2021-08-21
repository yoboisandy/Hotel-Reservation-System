<?php
include 'header.php';
?>
<section style="margin-top: 100px;">
    <section class="rooms-bg">
        <div class="content-area">
            <p>Rise-n-Shine Resort & Spa</p>
            <h1>Our Rooms & Suites</h1>
        </div>
    </section>



    <section class="rooms">
        <div class="title text-center mt-5 mb-3 ">
            <h1 class="display-4">Our Rooms</h1>
            <hr class="w-50 mx-auto">
        </div>

        <div class="row my-5">
            <?php
            $rooms = view_rooms();
            if ($rooms) {
                while ($row = $rooms->fetch_assoc()) {
                    echo "
        <div class='col-lg-6 col-12 d-flex justify-content-center my-4'>"
                        . "<a href='#' class='custom-card'>"
                        . "<div class='card' style='width: 28rem;'>"
                        . "<img src='Admin-Zone/"
                        . $row['image'] . "' class='card-img-top' style='width: 100%; height:20rem;'
                            alt='...'>"
                        . "<div class='card-body mt-4 mb-3 text-center'>"
                        . "<h3 class='card-title'>" . $row['name'] . "</h3>
                            <p class='card-text'>"
                        . "<i class='fas fa-bed'></i> &nbsp; "
                        . $row['beds'] . "
                                &nbsp; &nbsp; <i class='fas fa-toilet'></i>
                                &nbsp; "
                        . $row['washroom'] . "&nbsp;&nbsp;
                                <i class='fas fa-users'></i> &nbsp;"
                        . $row['people'] . "
                            </p>
                            <p class='price card-text letter-spacing-1 text-uppercase'>"
                        . $row['price'] . "
                            </p>
                            <p class='mt-4'>
                                <a class='btn-book-now' href='" . $base_url . "?r=booking-form&id=" . $row['id'] . "'>Book Now</a>
            </p>
        </div>
        </div>
        </a>
        </div>
        ";
                }
            }
            ?>
        </div>
    </section>



    <section class="suites">
        <div class="title text-center mt-5 mb-3 ">
            <h1 class="display-4">Our Suites</h1>
            <hr class="w-50 mx-auto">
        </div>
        <div class="row my-5">
            <?php
            $suites = view_suites();
            if ($suites) {
                while ($row = $suites->fetch_assoc()) {
                    echo "<div class='col-lg-6 col-12 d-flex justify-content-center my-4'>
                <a href='#' class='custom-card'>
                    <div class='card' style='width: 28rem;'>
                        <img src='Admin-Zone/" . $row['image'] . "' style='width: 100%; height:20rem;'
                            class='card-img-top' alt='...'>
                        <div class='card-body mt-4 mb-3 text-center'>
                            <h3 class='card-title'>" . $row['name'] . "</h3>
                            <p class='card-text'>
                                <i class='fas fa-bed'></i> &nbsp;" . $row['bed'] . "
                                &nbsp;&nbsp; <i class='fas fa-sink'></i>" . $row['kitchen'] . "  &nbsp;&nbsp;
                            </p>
                            <p class='card-text'>
                                <i class='fas fa-tv'></i> &nbsp;" . $row['living_room'] . "&nbsp;&nbsp; <i class='fas fa-toilet'></i>
                                &nbsp;" . $row['washroom'] . " &nbsp;&nbsp;<i class='fas fa-users'></i>
                                &nbsp;" . $row['people'] . "
                            </p>
                            <p class=' price card-text letter-spacing-1 text-uppercase'>"
                        . $row['price'] . "
                            </p>
                            <p class='mt-4'>
                                <a class='btn-book-now' href='<?php echo $base_url ?>?r=booking-form&id=" . $row['id'] . "'>Book Now</a>
            </p>
        </div>
        </div>
        </a>
        </div>";
                }
            } ?>
        </div>
    </section>


    <section class="accommodation-reserve">
        <div class="row  d-flex align-items-center">
            <div class="col-lg-12 col-12 text-center fixed-bg-content">
                <p>A Best Place To Stay.</p>
                <a href="#">Reseve Now !</a>
            </div>
        </div>
    </section>
</section>
</section>
<?php
include 'footer.php';
?>
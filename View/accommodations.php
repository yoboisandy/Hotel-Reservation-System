<?php
include 'header.php';
?>
<section style="margin-top: 100px;">
    <section class="rooms-bg">
        <div class="content-area">
            <p>Rise-n-Shine Resort & Spa</p>
            <h1>Our Rooms</h1>
        </div>

    </section>

    <div class="row d-flex justify-content-center mt-4" style="position: static;">
        <div class="col-10" style="border: 2px solid #deac46;border-radius:10px;position:absolute;top:440px;background-color:white;">
            <form action="" method="post" class="d-flex flex-column">
                <div class="input-group  my-4">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <div class="mx-3">Check In</div>
                                <input name="txtRooms" type="date" style="border-color:#deac46;width:100%" class="form-control mx-3" placeholder="No. of Rooms....">
                            </td>
                            <td>
                                <div class="mx-3">Check Out</div>
                                <input name="txtRooms" type="date" style="border-color:#deac46;width:100%" class="form-control mx-3" placeholder="No. of Rooms....">
                            </td>
                            <td>
                                <div class="mx-4"><button class="w-100 mt-3" style="border:2px solid #deac46;border-radius:10px;background-color:white;color:#deac46;" type="submit">Check</button></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </form>
        </div>
    </div>

    <section class="rooms mt-3">
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
                        . "<div class='card' style='width: 28rem;'>"
                        . "<img src='Admin-Zone/"
                        . $row['image'] . "' class='card-img-top' style='width: 100%; height:20rem;'
                            alt='...'>"
                        . "<div style='position:static;'><p style='position:absolute;top:8px;right:8px;background-color:#deac46;border-radius:10px;color:white;padding:3px 6px;'> Quantity : " . $row['quantity'] . "</p></div>"
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
        
        </div>
        ";
                }
            }
            ?>
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
<?php
include 'header.php';
?>

<section style="margin-top: 100px;">
    <section class="booking-form">
        <div class="row mb-5 mt-5 mx-5">
            <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
                <div class="form-heading p-1">
                    <div class="w-100 form-title text-center">Edit Reservation Information</div>
                </div>
                <div class="form-body p-3">
                    <?php include "view/flash.php" ?>
                    <form action="<?php echo $base_url; ?>?r=editBooking&id=<?= $id ?>" method="post">

                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Type of Room</label>
                            <div class="col-lg-8 col-7">
                                <select name="txtRoomId" size="1">
                                    <?php
                                    $rooms = view_rooms();
                                    $id = $_GET['id'];
                                    $reservation = where('reservations', 'id', '=', $id);
                                    if (!$rooms) {
                                    ?>
                                        <option disabled>No Rooms Available</option>
                                        <?php
                                    } else {
                                        while ($row = $rooms->fetch_assoc()) {
                                        ?>
                                            <option value="<?= $row['id'] ?>" <?php if ($row['id'] == $reservation['room_id']) echo "selected";
                                                                                else echo "disabled"; ?>><?= $row['name'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="userid" value="<?= $_SESSION['user']['user_id'] ?>">

                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">No. of Guests</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtGuests" type="number" min="0" value="<?= $reservation['guests'] ?>" style="border-color:#deac46;" class="form-control" placeholder="No. of Guests...." aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Check-in</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtCheckIn" type="datetime-local" value="<?php echo timeformat(strtotime($reservation['checkin'])); ?>" style="border-color:#deac46;" class="form-control" aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Check-out</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtCheckOut" type="datetime-local" value="<?php echo timeformat(strtotime($reservation['checkout'])); ?>" style="border-color:#deac46;" class="form-control" placeholder="E-mail..." aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <input type="submit" name="btnSubmit" value="Submit" class="w-25 form-button" />
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
</section>



<?php include 'footer.php' ?>
<?php include 'header.php' ?>
<section id="content" style="margin-top: 100px;">
    <div class="mx-5 my-5">
        <h2>All Bookings</h2>


        <div class='table-responsive m-4'>
            <?php include "view/flash.php" ?>
            <table class='table table-bordered border-dark '>
                <thead style="border:1px solid black; color:white;background-color:#deac46;">
                    <tr class="text-center ">
                        <th>Reservation Id</th>
                        <th>Room</th>
                        <th>User</th>
                        <th>Guests</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $reservations = view_reservations();
                    if ($reservations) {
                        while ($row = $reservations->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?php $id = $row['room_id'];
                                    $rooms = where('rooms', 'id', '=', $id);
                                    echo  $rooms['name'] ?> </td>

                                <td><?php $id = $row['user_id'];
                                    $user = where('user_tb', 'u_id', '=', $id);
                                    echo  $user['u_fname'] ?></td>
                                <td><?= $row['guests'] ?></td>
                                <td><?= $row['checkin'] ?></td>
                                <td><?= $row['checkout'] ?></td>

                                <td>
                                    <form action="<?php echo $base_url; ?>?r=editBooking&id=<?= $row['id'] ?>" method="post">
                                        <?php if ($row['status'] == "canceled") { ?>
                                            <span>Canceled</span>
                                        <?php } else if ($row['status'] == "checked out") {
                                        ?>
                                            <span>Checked Out</span>
                                        <?php
                                        } else { ?>
                                            <select name="status" id="status">
                                                </option>

                                                <?php if ($row['status'] == "Requested") { ?>
                                                    <option value="requested" <?php if ($row['status'] == "requested") echo "selected";   ?>>Requested</option>
                                                    <option value="confirmed" <?php if ($row['status'] == "confirmed") echo "selected";   ?>>confirmed</option>
                                                    <option value="canceled" <?php if ($row['status'] == "canceled") echo "selected";   ?>>canceled</option>
                                                <?php } else if ($row['status'] == "confirmed") { ?>
                                                    <option value="confirmed" <?php if ($row['status'] == "confirmed") echo "selected";   ?>>confirmed</option>
                                                    <option value="booked" <?php if ($row['status'] == "booked") echo "selected";   ?>>booked</option>
                                                <?php } else if ($row['status'] == "booked") { ?>
                                                    <option value="booked" <?php if ($row['status'] == "booked") echo "selected";   ?>>booked</option>
                                                    <option value="checked out" <?php if ($row['status'] == "checked out") echo "selected";   ?>>checked out</option>
                                                <?php } ?>
                                            </select>
                                            <button type="submit" class="btn-sm btn btn-primary">OK</button>
                                        <?php } ?>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {

                        echo "<tr><td>no bookings</td></tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
</section>
<?php include 'footer.php'; ?>
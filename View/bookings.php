<?php
include 'header.php';
?>

<section style="margin-top: 100px;">
    <div class="mx-5 my-5">
        <h2>My Bookings</h2>
        <?php include "view/flash.php" ?>
        <div class='table-responsive m-4'>
            <table class='table table-bordered border-dark '>
                <thead style="border:1px solid black; color:white;background-color:#deac46;">
                    <tr class="text-center ">
                        <th>Room</th>
                        <th>Guests</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Actions</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $reservations = view_reservations();
                    if ($reservations) {
                        while ($row = $reservations->fetch_assoc()) {
                            if ($row['user_id'] == $_SESSION['user']['user_id']) {
                    ?>
                                <tr>
                                    <td><?php $id = $row['room_id'];
                                        $rooms = where('rooms', 'id', '=', $id);
                                        echo  $rooms['name'] ?> </td>
                                    <td><?= $row['guests'] ?></td>
                                    <td><?= $row['checkin'] ?></td>
                                    <td><?= $row['checkout'] ?></td>
                                    <td class="text-center">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Booking Info" href="<?= $base_url ?>?r=editBooking&id=<?= $row['id'] ?>"><i class='fas fa-edit text-success'></i></a> |
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel Booking" href="<?= $base_url ?>?r=cancelBooking&id=<?= $row['id'] ?>"><i class="far fa-times-circle text-danger"></i></a>
                                    </td>
                                    </td>
                                    <td><?= $row['status'] ?></td>
                                </tr>
                    <?php
                            }
                        }
                    } else {
                        echo "no bookings";
                    }
                    ?>

                </tbody>
            </table>
        </div>
</section>

<?php
include 'footer.php';
?>
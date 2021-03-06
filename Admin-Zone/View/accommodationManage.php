<?php
include "header.php";
?>
<section id="content" style="margin-top:100px">
    <?php include 'flash.php'; ?>
    <section class="rooms">
        <h1 class=' m-4'>Room Details</h1>

        <?php
        $rooms = view_rooms();
        if ($rooms) {
        ?>
            <div class=' m-4'>
                <table class='table table-bordered border-dark '>
                    <thead style="border:1px solid black; color:white;background-color:#deac46">
                        <tr class="text-center ">
                            <th>Id</th>
                            <th>Name </th>
                            <th>Image</th>
                            <th>Beds</th>
                            <th>Washroom</th>
                            <th>People</th>
                            <th>Price</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $rooms->fetch_assoc()) {
                            echo "<tr>
                <td>" . $row["id"] .
                                "</td>
                <td>" . $row["name"] .
                                "</td>
                <td><img src='" . $row["image"] . "' width='100' height='100'>
                    </td>
                <td>" . $row["beds"] .
                                "</td>
                <td>" . $row["washroom"] .
                                "</td>
                <td>" . $row["people"] .
                                " Peoples</td>
                <td>RS. " . $row["price"] .
                                " / PER DAY</td>
                <td class='text-center'><a class='user-edit' href='" . $base_url .
                                "?r=editRoom&id=" . $row["id"] .
                                "'><i class='fas fa-edit'></i> </a> <a class='user-delete' href='" . $base_url .
                                "?r=deleteRoom&id=" . $row["id"] .
                                "'><i class='far fa-trash-alt'></i> </a></td>
            </tr>";
                        }
                    } else {
                        ?>
                        <table>
                            <tr>
                                <td><?php echo "no rooms found";
                                } ?></td>
                            </tr>
                        </table>

                        <tr height="50">
                            <td colspan='10'>
                                <a class="btn-addUser" href="<?= $base_url ?>?r=addRoom">Add Rooms</a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
    </section>
</section>

<?php

include "footer.php";

?>
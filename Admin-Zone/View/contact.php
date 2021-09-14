<?php include 'header.php'; ?>



<section class='ml-3 contact' id='content' style='margin-top:100px'>

    <h2 class='text-center my-4 display-5'>Message from Customers</h2>

    <?php include "view/flash.php" ?>


    <?php
    $contact =  get_contact_us();
    if ($contact) {
        $x = 0;
        while ($row = $contact->fetch_assoc()) {
            $x++;
            // echo "<div class='table-responsive'><table class='my-4 mx-5' style='table-layout:fixed;'><tr><th colspan='2' class='text-center contactor-name' style='font-size: large'>Message From : "
            //     . $row['name'] . "</th></tr><tr><th>"
            //     . $row['email'] . "</th><th >" . $row['phone'] . "</th></tr><tr><td colspan='2' style='width:1400px'>"
            //     . $row['message'] . "</td></tr></table></div>";
    ?>
            <div class="accordion mx-5 my-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" style="background-color: #deac46;color:black" type="button" data-bs-toggle="collapse" data-bs-target="#part_<?php echo $x; ?>" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Message From: <?= $row['name']  ?></strong>
                            <a class='user-delete mx-3' style="border:1px solid red" href="<?= $base_url ?>?r=deleteContactUs&id=<?= $row["u_id"] ?>"><i class='far fa-trash-alt'></i></a>
                        </button>
                    </h2>
                    <div id="part_<?php echo $x; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-6 text-center fw-bold"><?= $row['email'] ?></div>
                                <div class="col-6 text-center fw-bold"><?= $row['phone'] ?></div>
                                <div class="col-12">
                                    <?= $row['message'] ?>
                                </div>
                                <div class="col-12">
                                    <div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } ?>

</section>
<style>
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0, 0, 0, .125);
    }
</style>

<?php include 'footer.php'; ?>
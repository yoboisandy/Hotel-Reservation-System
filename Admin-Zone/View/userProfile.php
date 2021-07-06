<?php include 'header.php'; ?>

<section style="margin:100px">
    <div class="container mt-5">


        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-md-10 col-12">
                <div class="row">
                    <?php include 'flash.php'; ?>
                    <div class="col-lg-4" style="background-color: #deac46">
                        <div class="text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-5"><?= $user_data['u_fname'] ?>
                                <?= $user_data['u_lname'] ?></h2>
                            <p><?= $user_data['u_address'] ?></p>
                            <a href="<?= $base_url ?>?r=edituser&id=<?php echo $id ?>" class="text-white "><i
                                    class="far fa-edit fa-2x mb-5"></i></a>
                        </div>
                    </div>
                    <div class="col bg-white rounded-right" style="border: 1px solid #deac46">
                        <h3 class="text-center mt-3">Profile</h3>
                        <hr class="badge-primary mt-0 w-25 mx-auto" />

                        <div class="row p-3">
                            <div class="col-12 ">
                                <span class="fw-bold fs-5">First Name : </span>
                                <span class="text-muted"><?= $user_data['u_fname'] ?></span>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="fw-bold fs-5">Last Name : </span>
                                <span class="text-muted"><?= $user_data['u_lname'] ?></span>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="fw-bold fs-5">Email : </span>
                                <span class="text-muted"><?= $user_data['u_email'] ?></span>
                            </div>
                            <div class="col-12 my-4">
                                <span class="fw-bold fs-5">Phone : </span>
                                <span class="text-muted"><?= $user_data['u_phone'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include 'footer.php'; ?>
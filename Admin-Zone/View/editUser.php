<?php
include 'header.php';
?>

<section style="margin-top: 100px;">

    <section class="login-register">
        <div class="row mb-5 mt-5 mx-5">
            <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
                <div class="form-heading p-1">
                    <div class="w-100 form-title text-center">Edit User Info</div>
                </div>
                <div class="form-body p-3">
                    <?php include 'View/flash.php'; ?>
                    <form action="<?php echo $base_url; ?>?r=editUser&id=<?php echo $id; ?>" method="post">

                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">First Name</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtFName" type="text" style="border-color:#deac46;" class="form-control" value="<?= $user_data['u_fname'] ?>" aria-label="name" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Last Name</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtLName" type="text" style="border-color:#deac46;" class="form-control" value="<?= $user_data['u_lname'] ?>" aria-label="name" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Email</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtEmail" type="email" style="border-color:#deac46;" class="form-control" value="<?= $user_data['u_email'] ?>" aria-label="email" aria-describedby="basic-addon1">

                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="phone">Phone</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtPhone" type="text" style="border-color:#deac46;" class="form-control" value="<?= $user_data['u_phone'] ?>" aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="offset-lg-1 col-lg-3 col-5" for="address">Address</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtAddress" type="text" style="border-color:#deac46;" class="form-control" value="<?= $user_data['u_address'] ?>" aria-label="address" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="offset-lg-1 col-lg-3 col-5" for="password">Password</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtPassword" type="password" style="border-color:#deac46;" class="form-control" aria-label="password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="usertype">User Type</label>
                            <input class="form-check-input" value="1" type="radio" name="txtUserType" id="flexRadioDefault1" <?php if ($user_data['u_type'] == 1) echo "checked"; ?>>&emsp;
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>&emsp;
                            <input class="form-check-input" value="0" type="radio" name="txtUserType" id="flexRadioDefault1" <?php if ($user_data['u_type'] == 0) echo "checked"; ?>>&emsp;
                            <label class="form-check-label" for="flexRadioDefault1">
                                User
                            </label>

                        </div>


                        <div class="input-group my-4 justify-content-center">
                            <input type="submit" name="btnSignUp" value="Update Profile" class=" form-button" />
                        </div>


                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
</section>

<?php
include 'footer.php';
?>
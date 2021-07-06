<?php include 'header.php'; ?>



<section class="login-register" id='content' style='margin-top:120px'>
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
                            <input name="txtFName" type="text" style="border-color:#d76149;" class="form-control"
                                aria-label="name" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_fname']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="name">Last Name</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtLName" type="text" style="border-color:#d76149;" class="form-control"
                                aria-label="name" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_lname']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="name">Email</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtEmail" type="email" style="border-color:#d76149;" class="form-control"
                                aria-label="email" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_email']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="phone">Phone</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtPhone" type="text" style="border-color:#d76149;" class="form-control"
                                aria-label="email" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_phone']; ?>">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="address">Address</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtAddress" type="text" style="border-color:#d76149;" class="form-control"
                                aria-label="address" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_address']; ?>">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="password">Password</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtPassword" type="password" style="border-color:#d76149;" class="form-control"
                                aria-label="password" aria-describedby="basic-addon1"
                                value="<?php echo $user_data['u_password']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="user type">User Type</label>
                        <input style=" width: 20px;height: 20px;" name="txtUserType" type="radio" value="1"
                            aria-label="name" aria-describedby="basic-addon1" value="1"><span style="font-size:15px;">
                            &nbsp;Admin</span>&emsp;&emsp;
                        <input style=" width: 20px;height: 20px;" name="txtUserType" type="radio" value="0"
                            aria-label="name" aria-describedby="basic-addon1" value="0" default><span
                            style="font-size:15px;">
                            &nbsp;User</span>
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <input type="submit" value="Update" class="w-25 form-button" />
                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php'; ?>
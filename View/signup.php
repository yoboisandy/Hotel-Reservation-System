<?php include 'header.php'; ?>
<section style="margin-top: 100px;">

    <section class="login-register">
        <div class="row mb-5 mt-5 mx-5">
            <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
                <div class="form-heading p-1">
                    <div class="w-100 form-title text-center">User Signup</div>
                </div>
                <div class="form-body p-3">
                    <?php include 'View/flash.php'; ?>
                    <form action="<?php echo $base_url; ?>?r=signup" method="post">
                        <!-- Name -->
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">First Name</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtFName" type="text" style="border-color:#deac46;" class="form-control" placeholder="First Name..." aria-label="name" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Last Name</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtLName" type="text" style="border-color:#deac46;" class="form-control" placeholder="Last Name..." aria-label="name" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="name">Email</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtEmail" type="email" style="border-color:#deac46;" class="form-control" placeholder="E-mail..." aria-label="email" aria-describedby="basic-addon1">

                            </div>
                        </div>
                        <div class="input-group  my-4">
                            <label class="offset-lg-1 col-lg-3 col-5" for="phone">Phone</label>
                            <div class="col-lg-8  col-7">
                                <input name="txtPhone" type="text" style="border-color:#deac46;" class="form-control" placeholder="Phone Number..." aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="offset-lg-1 col-lg-3 col-5" for="address">Address</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtAddress" type="text" style="border-color:#deac46;" class="form-control" placeholder="Your Address..." aria-label="address" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="offset-lg-1 col-lg-3 col-5" for="password">Password</label>
                            <div class="col-lg-8 col-7">
                                <input name="txtPassword" type="password" style="border-color:#deac46;" class="form-control" placeholder="Your Password..." aria-label="password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="confirm password">Confirm Password</label>
                        <div class="col-lg-8 col-7">
                            <input type="text" name="txtConfirmPassword" style="border-color:#deac46;"
                                class="form-control" placeholder="Re-Enter Password..." aria-label="password"
                                aria-describedby="basic-addon1">
                        </div>
                    </div> -->
                        <div class="input-group">
                            <label class="offset-lg-1 col-lg-3 col-5" for=""></label>
                            <div class="check mb-4"><input type="checkbox" name="checkT&C">
                                <span>Agree to all the Terms & Condition</span>
                            </div>
                        </div>

                        <div class="input-group mb-3 justify-content-center">
                            <input type="submit" name="btnSignUp" value="sign up" class="w-25 form-button" />
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Already have an account? <a href="<?php $base_url ?>?r=login">Sign
                                    In</a></p>
                        </div>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
</section>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<section class="login-register" id='content' style='margin-top:120px'>
    <div class="row mb-5 mt-5 mx-5">
        <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
            <div class="form-heading p-1">
                <div class="w-100 form-title text-center">Add Admin</div>
            </div>
            <div class="form-body p-3">
                <?php include 'View/flash.php'; ?>
                <form action="<?php echo $base_url; ?>?r=addUser" method="post">

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="name">First Name</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtFName" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="First Name..." aria-label="name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="name">Last Name</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtLName" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Last Name..." aria-label="name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="name">Email</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtEmail" type="email" style="border-color:#d76149;" class="form-control"
                                placeholder="E-mail..." aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="phone">Phone</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtPhone" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Phone Number..." aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="address">Address</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtAddress" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Your Address..." aria-label="address" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="password">Password</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtPassword" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Your Password..." aria-label="password" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <input name="txtUserType" type="hidden" value="1" aria-label="name"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <input type="submit" name="btnSignUp" value="Add Admin" class="w-25 form-button" />
                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php'; ?>
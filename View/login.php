<?php include 'header.php'; ?>
<section style="margin-top: 100px;">

    <section class="login-register">
        <div class="row my-5 mx-5">
            <div class="offset-lg-3 col-lg-6  col-sm-12 form-login">
                <div class="form-heading p-1">
                    <div class="w-100 form-title text-center">User Login</div>
                </div>
                <div class="form-body p-3">
                    <form action="<?php echo $base_url ?>?r=login" method="post">
                        <?php include 'flash.php'; ?>
                        <div class="input-group  my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas  fa-user-tie"></i></span>
                            </div>
                            <input type="email" style="border-color:#deac46;" class="form-control"
                                placeholder="E-Mail..." aria-label="Email" name="txtEmail"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas  fa-lock"></i></span>
                            </div>
                            <input type="password" style="border-color:#deac46;" class="form-control"
                                placeholder="Password..." name="txtPassword" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <div class="check mb-4"><input type="checkbox" name="checkKeepMeLoggedIn" id="">
                                <span>Keep me logged in</span>
                            </div>
                        </div>

                        <div class="input-group mb-3 justify-content-center">
                            <input type="submit" name="btnSignIn" value="Sign In" class="w-35 form-button">
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Don't have an account ? <a href="<?php $base_url ?>?r=signup">Sign
                                    Up</a></p>
                            <p><a href="#">Forget Password ?</a></p>
                        </div>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
</section>

<?php include 'footer.php'; ?>
<?php
include 'header.php';
?>
<section style="margin-top: 100px;">

    <section class="contact-page">
        <!-- banner -->
        <div class="banner-area">
            <div class="content-area">
                <p>Rise-n-Shine Resort & Spa</p>
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="title text-center mt-5 ">
            <h1 class="display-4">Get in Touch</h1>
            <hr class="w-50 mx-auto">
        </div>

        <div class="row contact-area">

            <div class="row d-flex justify-content-center mt-3">

                <div class="col-9"><?php include "View/flash.php"; ?></div>
            </div>
            <div class="col-lg-8 col-md-12 contact-form">
                <div class="row d-flex justify-content-center mx-auto  p-5">

                    <form action="<?= $base_url ?>?r=contact" method="post">
                        <div class=" col-12">
                            <label for="inputName">Name</label><span>&nbsp;*</span>
                            <input type="text" placeholder="Your Name..." <?php
                                                                            if (!empty($_SESSION['user']['login'])) { ?> value="<?= $_SESSION['user']['user_name'];
                                                                                                                                ?>" readonly <?php } ?> class="form-control my-2" id="inputName" name="name" required>
                            <div id="name_error" class="val_error"></div>
                        </div>
                        <div class=" col-12">
                            <label for="inputEmail">Email</label><span>&nbsp;*</span>
                            <input type="email" placeholder="someone@example.com" <?php
                                                                                    if (!empty($_SESSION['user']['login'])) { ?> value="<?= $_SESSION['user']['email'];
                                                                                                                                        ?>" readonly <?php } ?> class="form-control my-2" id="inputEmail" name="email" required>
                            <div id="email_error" class="val_error"></div>
                        </div>
                        <div class=" col-12">
                            <label for="inputPhone">Phone</label><span>&nbsp;*</span>
                            <input type="text" placeholder="Your Number..." <?php
                                                                            if (!empty($_SESSION['user']['login'])) { ?> value="<?= $_SESSION['user']['phone'];
                                                                                                                                ?>" readonly <?php } ?> class="form-control my-2" id="inputPhone" name="phone" required>
                            <div id="phone_error" class="val_error"></div>
                        </div>
                        <div class=" col-12">
                            <label for="inputMessage">Message</label><span>&nbsp;*</span>
                            <textarea class="form-control my-2" placeholder="Message..." id="inputMessage" rows="3" name="message"></textarea>
                            <div id="message_error" class="val_error"></div>
                        </div>
                        <div class=" col-12">
                            <div class=" pt-4"> <button type="submit" class="form-button btn btn-block btn-lg" value="Register" name="register">SEND MESSAGE</button> </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-4 col-md-12 p-5">
                <div class="row d-flex justify-content-center mx-auto ">
                    <div class="contact-info mt-3">
                        <span class="contact-info__icon mx-3"><i class="fas fa-2x fa-home"></i></span>
                        <div class="contact-info-body">
                            <h3>Golaghat, Meghauli</h3>
                            <p>Chitwan, Nepal</p>
                        </div>
                    </div>
                    <div class="contact-info mt-4">
                        <span class="contact-info__icon mx-3"><i class="fas fa-2x fa-phone"></i></span>
                        <div class="contact-info-body">
                            <h3>+9779845234568</h3>
                            <p>24/7 on Your Service</p>
                        </div>
                    </div>
                    <div class="contact-info mt-4">
                        <span class="contact-info__icon mx-3"><i class="far fa-2x fa-envelope"></i></span>
                        <div class="contact-info-body">
                            <h3>support@risenshine.com</h3>
                            <p>Send us your query anytime!l</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- title -->
        <div class="title text-center my-5">
            <h1 class="display-4">Locate Us</h1>
            <hr class="w-50 mx-auto">
        </div>

        <!-- Google Map Starts -->
        <section class="mt-5 mb-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28119.421372176363!2d84.16088583128287!3d27.560512141188337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2432d71cbec82735!2sGolaghat%20Wildlife%20Resort!5e1!3m2!1sen!2snp!4v1613490458055!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        <!-- Google Map Ends -->
    </section>
</section>

<?php
include 'footer.php';
?>
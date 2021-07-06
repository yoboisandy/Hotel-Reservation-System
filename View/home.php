<?php
include 'header.php';
?>
<section style="margin-top: 100px;">
    <!-- carousel Starts -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\carouselimg1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-lg-block">
                    <h2>Welcome To Rise-n-Shine Resort & Spa</h2>
                    <br />
                    <p><a class="btn-book-your-stay" href="<?= $base_url ?>?r=accommodations">Book Your Stay</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\9426-slide-05.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-lg-block">
                    <h2>Welcome To Rise-n-Shine Resort & Spa</h2>
                    <br />
                    <p><a class="btn-book-your-stay" href="#">Book Your Stay</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\682-executive-room3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-md-block">
                    <h2>Welcome To Rise-n-Shine Resort & Spa</h2>
                    <br />
                    <p><a class="btn-book-your-stay" href="#">Book Your Stay</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel Ends -->

    <!-- Description Starts-->

    <section class="container my-5 mr-5 ml-5">
        <div class="text-center">
            <h2 class="display-4">Rise-n-Shine Resort & Spa</h2>
            <hr class="w-50 mx-auto" />
        </div>
        <div class="row mx-5">
            <div class="col-12">
                <p class="desc mt-4">
                    Rise-n-Shine Resort & Spa (Located in Chitwan, Nepal) is a perfect getaway for friends and family
                    for a
                    Private
                    Party, Family Vacation and to celebrate special events and occasions. It is located by the side of
                    the
                    river with a spectacular view of nature. Celebrate Birthday parties, Family Vacation, Destination
                    Wedding, Corporate Events, Movie Nights, Gaming Nights, BBQ Nights, Engagement Party and more.
                </p>
            </div>
        </div>
        <div class="row my-5">
            <div class="desc-links col-6   text-center ">
                <a href="#"><i class="fas fa-phone"></i></i>&emsp; Call Now</a>
            </div>
            <div class="desc-links col-6   text-center">
                <a href="#"><i class="far fa-calendar-alt"></i>&emsp; Book Now</a>
            </div>
        </div>
    </section>
    <br>
    <!-- Description Ends-->


    <!-- Services Starts -->
    <section class="my-5">
        <div class="text-center">
            <h1 class="display-4 ">Services</h1>
            <hr class="w-25 mx-auto" />
        </div>
        <div class="container my-5">
            <!-- row-1 -->
            <div class="row my-5">
                <div class="col-4">
                    <img src="images\icons\24-hours.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\wifi.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\air-conditioner.svg" alt="" />
                </div>
            </div>
            <!-- row-1 caption -->
            <div class="row">
                <div class="col-4 service-caption">24/7 Room Service</div>
                <div class="col-4 service-caption">Free WIFI</div>
                <div class="col-4 service-caption">Air-Conditioned Rooms</div>
            </div>
            <!-- row-2 -->
            <div class="row my-5">
                <div class="col-4">
                    <img src="images\icons\hair-dryer.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\spa.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\swimming.svg" alt="" />
                </div>
            </div>
            <!-- row-2 caption -->
            <div class="row">
                <div class="col-4 service-caption">Hair Dryer</div>
                <div class="col-4 service-caption">Massage Theraphy</div>
                <div class="col-4 service-caption">Outdoor Pool</div>
            </div>
            <!-- row-3 -->
            <div class="row my-5">
                <div class="col-4">
                    <img src="images\icons\safari.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\washing-machine.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\parking.svg" alt="" />
                </div>
            </div>
            <!-- row-3 caption -->
            <div class="row">
                <div class="col-4 service-caption">Jungle Safari</div>
                <div class="col-4 service-caption">Laundry</div>
                <div class="col-4 service-caption">Sufficient Parking</div>
            </div>
            <!-- row-4 -->
            <div class="row my-5">
                <div class="col-4">
                    <img src="images\icons\dumbbell.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\theater.svg" alt="" />
                </div>
                <div class="col-4">
                    <img src="images\icons\tray.svg" alt="" />
                </div>
            </div>
            <!-- row-4 caption -->
            <div class="row">
                <div class="col-4 service-caption">Gym</div>
                <div class="col-4 service-caption">Event Hall</div>
                <div class="col-4 service-caption">Restaurant with bar</div>
            </div>
        </div>
    </section>
    <br>
    <!-- Services Ends -->

    <!-- Testimonials Starts -->
    <section class="my-5 testimonials">
        <div class="text-center">
            <h1 class="display-4">Testimonials</h1>
            <hr class="w-25 mx-auto" />
        </div>
        <div class="container my-5">
            <div class="row mx-auto my-auto">
                <!-- Card 1 -->
                <div class=" d-flex justify-content-center col-lg-3 col-md-6 col-12 my-3">
                    <div class=" card" style="width: 20rem">
                        <!-- <div class="card-header"></div> -->
                        <img src="images\testimonials\nareah.jpg" class="card-img-top mx-auto my-2 " alt="..." />
                        <div class="card-body text-center">
                            <p class="card-text ">
                                I have to recognize your outstanding hospitality and service that I receive on a daily
                                basis. My room is always clean, fresh towels and linens are always present. Your staff
                                makes
                                me feel as If I am the only customer in your hotel. If you are looking for exclusivity
                                and
                                first class then look no further.
                            </p>
                            <div class="testimonials-footer">
                                <span class="testimonials-name">Naresh Rokaya</span><br />
                                <span class="from">Dang, Nepal</span><br>
                                <span class="profession">Health Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class=" d-flex justify-content-center col-lg-3 col-md-6 col-12 my-3">
                    <div class="card" style="width: 20rem">
                        <!-- <div class="card-header"></div> -->
                        <img src="images\testimonials\santosh.JPG" class="card-img-top mx-auto my-2 " alt="..." />
                        <div class="card-body text-center">
                            <p class="card-text">
                                I have to recognize your outstanding hospitality and service that I receive on a daily
                                basis. My room is always clean, fresh towels and linens are always present. Your staff
                                makes
                                me feel as If I am the only customer in your hotel. If you are looking for exclusivity
                                and
                                first class then look no further.
                            </p>
                            <div class="testimonials-footer">
                                <span class="testimonials-name">Santosh Poudel</span><br />
                                <span class="from">Baglung, Nepal</span><br>
                                <span class="profession">Broker</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class=" d-flex  justify-content-center col-lg-3 col-md-6 col-12 my-3">
                    <div class=" card" style="width: 20rem">
                        <!-- <div class="card-header"></div> -->
                        <img src="images\testimonials\sujan.JPG" class="card-img-top mx-auto my-2" alt="..." />
                        <div class="card-body text-center">
                            <p class="card-text">
                                I have to recognize your outstanding hospitality and service that I receive on a daily
                                basis. My room is always clean, fresh towels and linens are always present. Your staff
                                makes
                                me feel as If I am the only customer in your hotel. If you are looking for exclusivity
                                and
                                first class then look no further.
                            </p>
                            <div class="testimonials-footer">
                                <span class="testimonials-name">Sujan Maskey</span><br />
                                <span class="from">Gaindakot, Nepal</span><br>
                                <span class="profession">proffesor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class=" d-flex justify-content-center col-lg-3 col-md-6 col-12 my-3">
                    <div class=" card" style="width: 20rem">
                        <!-- <div class="card-header"></div> -->
                        <img src="images\testimonials\nirmal.jpg" class="card-img-top img-fluid mx-auto my-2"
                            alt="..." />
                        <div class="card-body text-center">
                            <p class="card-text">
                                I have to recognize your outstanding hospitality and service that I receive on a daily
                                basis. My room is always clean, fresh towels and linens are always present. Your staff
                                makes
                                me feel as If I am the only customer in your hotel. If you are looking for exclusivity
                                and
                                first class then look no further.
                            </p>
                            <div class="testimonials-footer">
                                <span class="testimonials-name">Nirmal Subedi</span><br />
                                <span class="from">Gaindakot, Nepal</span><br>
                                <span class="profession">CEO of Hotel Lakhpati</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <!-- Testimonials Ends -->


    <!-- Google Map Starts -->
    <section class="mt-5 mb-0">
        <div class="text-center">
            <h1 class="display-4">Locate Us</h1>
            <hr class="w-25 mx-auto" />
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28119.421372176363!2d84.16088583128287!3d27.560512141188337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2432d71cbec82735!2sGolaghat%20Wildlife%20Resort!5e1!3m2!1sen!2snp!4v1613490458055!5m2!1sen!2snp"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>
    <!-- Google Map Ends -->
</section>
<?php
include 'footer.php';
?>
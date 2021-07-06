<?php include 'header.php'; ?>

<section class="login-register" id='content' style='margin-top:120px'>
    <div class="row mb-5 mt-5 mx-5">
        <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
            <div class="form-heading p-1">
                <div class="w-100 form-title text-center">Add Suites</div>
            </div>
            <div class="form-body p-3">
                <?php include 'View/flash.php'; ?>
                <form action="<?php echo $base_url; ?>?r=addSuite" method="post" enctype="multipart/form-data">

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Room Name">Suite Name</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtSuiteName" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Suite Name..." aria-label="name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="fileToUpload">Suite Image</label>
                        <div class="col-lg-8 col-7">
                            <input name="fileToUpload" id="fileToUpload" type="file" style="border-color:#d76149;"
                                class="form-control" placeholder="Suite Pic..." aria-label="name"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Beds">Beds</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtBed" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Beds..." aria-label="name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Washroom">Kitchen</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtKitchen" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Kitchen..." aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Washroom">Living Room</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtLivingRoom" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Living Room..." aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Washroom">Washroom</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtWashroom" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Washrooms..." aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="People">People</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtPeople" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="No. of adults and kids..." aria-label="email"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="price">Price</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtPrice" type="text" style="border-color:#d76149;" class="form-control"
                                placeholder="Price Per Night..." aria-label="address" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mt-4 mb-3 justify-content-center">
                        <input type="submit" name="btnAddRooms" value="Add Suite" class="w-25 form-button" />
                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<section class="login-register" id='content' style='margin-top:120px'>
    <div class="row mb-5 mt-5 mx-5">
        <div class=" col-lg-8 offset-lg-2  col-sm-12 form-login">
            <div class="form-heading p-1">
                <div class="w-100 form-title text-center">Edit Room Details</div>
            </div>
            <div class="form-body p-3">
                <?php include 'View/flash.php'; ?>
                <form action="<?php echo $base_url; ?>?r=editRoom&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Room Name">Room Name</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtRoomName" type="text" style="border-color:#d76149;" class="form-control" aria-label="name" aria-describedby="basic-addon1" value="<?php echo $room_data['name']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="fileToUpload">Room Image</label>
                        <div class="col-lg-8 col-7">
                            <input name="fileToUpload" id="fileToUpload" type="file" style="border-color:#d76149;" class="form-control" aria-label="name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Beds">Beds</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtBed" type="text" style="border-color:#d76149;" class="form-control" aria-label="name" aria-describedby="basic-addon1" value="<?php echo $room_data['beds']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Washroom">Washroom</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtWashroom" type="text" style="border-color:#d76149;" class="form-control" aria-label="email" aria-describedby="basic-addon1" value="<?php echo $room_data['washroom']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="People">People</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtPeople" type="text" style="border-color:#d76149;" class="form-control" aria-label="email" aria-describedby="basic-addon1" value="<?php echo $room_data['people']; ?>">
                        </div>
                    </div>

                    <div class="input-group  my-4">
                        <label class="offset-lg-1 col-lg-3 col-5" for="Quantity">Quantity</label>
                        <div class="col-lg-8  col-7">
                            <input name="txtQuantity" type="number" style="border-color:#d76149;" class="form-control" value="<?php echo $room_data['quantity']; ?>" aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="offset-lg-1 col-lg-3 col-5" for="price">Price</label>
                        <div class="col-lg-8 col-7">
                            <input name="txtPrice" type="text" style="border-color:#d76149;" class="form-control" aria-label="address" aria-describedby="basic-addon1" value="<?php echo $room_data['price']; ?>">
                        </div>
                    </div>

                    <div class="input-group mt-4 mb-3 justify-content-center">
                        <input type="submit" name="btnUpdateRooms" value="Update" class="w-25 form-button" />
                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php'; ?>
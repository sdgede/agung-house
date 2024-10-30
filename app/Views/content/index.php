<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="fw-bold title" style="text-transform: capitalize; font-size:60px;">Feel the Comfort
                <br>
                of your Home
                <br>with us</h1>

            <!-- harga -->
            <div
                class="shadow px-4 py-4  bg-body-tertiary rounded"
                style="width:300px; margin-top:100px;">
                <div class="card-header">
                    <div class="d-flex">
                        <h5 class="fs-5 fw-bold">Rp. 7.000.000</h5>
                        <span style="font-size:12px;">
                            /month</span>
                    </div>

                    <div class="card-bod text-center my-4 ">
                        <form action="" class="d-flex row  ">
                            <div class="col-6 checkin py-2 border">
                                <label for="Check-in border border-3">Check-in</label>
                                <br>
                                <input type="date" name="Check-in" id="Check-in" class="input_none">
                            </div>
                            <div class="col-6 checkout py-2 border border-start-3">
                                <label for="Check-out">Check-out</label>
                                <br>
                                <input type="date" name="Check-out" id="Check-out" class="input_none">
                            </div>
                            <div class="col-12 text-start guest py-2 border border-top-0  ">
                                <label for="Guest" class="fw-bold pl-1">Guest</label><br>
                                <select class="input_none pt-2">
                                    <option value="1">1 Guest</option>
                                    <option value="2">2 Guest</option>
                                    <option value="4">4 Guest</option>
                                    <option value="6">6 Guest</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <a href="#" class="btn btn_ku" >Book Now</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- img header -->
        <div class="col-6">
            <div class="header_img">
                <div class="loby">
                    <img
                        class="img3"
                        src="<?= base_url('assets/img/loby.png'); ?>"
                        width="250"
                        alt="">
                </div>
                <div class="room">
                    <img
                        class="img1"
                        src="<?= base_url('assets/img/room.png'); ?>"
                        alt=""
                        width="250px">
                    <img
                        class="py-4"
                        src="<?= base_url('assets/img/window.png'); ?>"
                        width="250px"
                        alt="">
                </div>
            </div>
            <!-- Add more items as needed -->
        </div>
    </div>
</div>
</div>

<?= $this->EndSection(); ?>
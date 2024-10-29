<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="fw-bold title" style="text-transform: capitalize; font-size:60px;">Feel the Comfort
                <br>
                of your Home
                <br>with us</h1>

            <div class="shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="card-title">
                    <div class="d-flex">
                        <h5 class="fs-6 fw-bold">Rp. 7.000.000</h5>
                        <span style="font-size:12px;">
                            /month</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="gallery">
                <div class="gallery-item">
                <img src="<?= base_url('assets/img/room.png'); ?>" alt="" width="200px">
                <img src="<?= base_url('assets/img/window.png'); ?>" height="250px" alt="">
               
            </div>
                <div class="gallery-item">
                <img src="<?= base_url('assets/img/loby.png'); ?>" height="300px" alt="">
                </div>
                <!-- Add more items as needed -->
            </div>
        </div>
    </div>
</div>

<?= $this->EndSection(); ?>
<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-7 p-1 pt-0">
            <div class="card-image">
                <img class="rooms-image" src="<?= base_url('assets/img/rooms-left.png'); ?>" alt="">
                <button class="button-show-all-photos">
                    <i class="fas fa-image"></i>
                </button>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row rooms-wrap">
                <div class="col-lg-6 p-1 pt-0">
                    <div class="card-image">
                        <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth1.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-1 pt-0">
                    <div class="card-image">
                        <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth2.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="card-image">
                        <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth2.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="card-image">
                        <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth3.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->EndSection(); ?>
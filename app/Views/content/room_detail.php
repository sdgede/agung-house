<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid">
    <!-- Room Image -->
    <section class="rooms-images">
        <div class="row">
            <div class="col-lg-7 p-1 pt-0">
                <div class="card-image">
                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-left.png'); ?>" alt="">
                    <a href="#" class="button-show-all-photos">
                        <i class="fas fa-image rooms-icon"></i>
                        <p class="m-0">Show all photos</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row rooms-wrap">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-6 p-1 pt-0">
                                <div class="card-image">
                                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth1.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6 p-1 pt-0">
                                <div class="card-image">
                                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth2.png'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-6 p-1">
                                <div class="card-image">
                                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth2.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6 p-1">
                                <div class="card-image">
                                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-rigth3.png'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="button-show-all-photos2">
                <i class="fas fa-image rooms-icon"></i>
                <p class="m-0">Show all photos</p>
            </a>
        </div>
    </section>
    <!-- End Room Image -->

    <!-- Main -->
    <section class="rooms-main">
        <div class="row rooms-main-row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <div class="room-bedge">
                            <p class="room-bedge-text">Villa Room</p>
                        </div>
                        <div class="action-group">
                            <button class="action-button">
                                <i class="fas fa-share"></i>
                                <p class="m-0">Share</p>
                            </button>
                            <button class="action-button">
                                <i class="far fa-heart"></i>
                                <p class="m-0">Save</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="type-room m-0">Deluxe Room</h3>
                        <p class="m-0">
                            <i class="fas fa-star rating-star"></i>
                            4.9 <span>(122 riviews) - Jakarta, Indonesia</span>
                        </p>
                        <div class="hotel-profile">
                            <img class="hotel-profile-image" src="/assets/img/profile.jpeg" alt="">
                            <h4 class="hotel-name m-0">Agung Guest House</h4>
                        </div>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="room-info">
                                            <i class="fas fa-user"></i>
                                            2 Guests
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="room-info">
                                            <i class="fas fa-bed"></i>
                                            1 Beds
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="room-info">
                                            <i class="fas fa-bath"></i>
                                            1 Baths
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="room-info">
                                            <i class="fas fa-door-open"></i>
                                            1 Bedrooms
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card"></div>
            </div>
        </div>
    </section>
    <!-- Main -->
    <!-- </div> -->
    <?= $this->EndSection(); ?>
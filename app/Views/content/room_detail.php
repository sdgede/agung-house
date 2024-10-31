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
        </div>
    </section>
    <!-- End Room Image -->

    <!-- Main -->
    <section class="rooms-main">
        <div class="row rooms-main-row">
            <div class="col-lg-7">
                <!-- Room Information -->
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
                <!-- Stay Information -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="stay-info-title m-0">Stay Information</h5>
                    </div>
                    <div class="card-body stay-info-body">
                        Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.
                        <br>
                        <br>
                        There is a private bathroom with bidet in all units, along with a hairdryer and free toiletries.
                        <br>
                        <br>
                        The Symphony 9 Tam Coc offers a terrace.
                        <br>
                        <br>
                        Both a bicycle rental service and a car rental service are available at the accommodation, while cycling can be enjoyed nearby.
                    </div>
                    <div class="card-footer"></div>
                </div>

                <!-- Amenities -->
                <div class="card">
                    <div class="card-header amenities-header">
                        <h5 class="stay-info-title m-0">Amenities</h5>
                        <p class="m-0">About the property's amenities and services</p>
                    </div>
                    <div class="card-body stay-info-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <i class="fas fa-wifi"></i>
                                Wifi
                            </div>
                            <div class="col-lg-4">
                                <i class="fas fa-tv"></i>
                                Televition
                            </div>
                            <div class="col-lg-4">
                                <i class="far fa-air-conditioner"></i>
                                Air Conditioner
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>

            <!-- Col - 4 -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="room-price">
                            <h3 class="type-room m-0">$200 <span>/night</span></h3>
                            <p class="m-0">
                                <i class="fas fa-star rating-star"></i>
                                4.9 <span>(122 riviews)</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="info-reservation">
                            <div class="row">
                                <div class="col-lg-6">
                                    <i class="far fa-calendar"></i>
                                    <div class="check-in">
                                        <span>Check In</span>
                                        <h5 class="m-0">Aug 12</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <i class="far fa-calendar"></i>
                                    <div class="check-out">
                                        <span>Check Out</span>
                                        <h5 class="m-0">Aug 18</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-6">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="guests">
                                        <span>Guests</span>
                                        <h5 class="m-0">3 Guests</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                        </div>
                        <div class="total-price">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service">
                                        $200 x 3 night
                                    </div>
                                    <div class="price">
                                        $600
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="service">
                                        Service charge
                                    </div>
                                    <div class="price">
                                        $0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="total-prices">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service">
                                        Total
                                    </div>
                                    <div class="price">
                                        $600
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="https://wa.me/6282147836034?test=Booking%20Deluxe%20Room" class="booking-wa-button">
                            <i class="fab fa-whatsapp"></i>
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main -->
    <!-- </div> -->
    <?= $this->EndSection(); ?>
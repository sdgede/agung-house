<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid">
    <!-- Room Image -->
    <section class="rooms-images ">
        <div class="row">
            <div class="col-lg-7 p-1 pt-0" data-aos="fade-right">
                <div class="card-image">
                    <img class="rooms-image" src="<?= base_url('assets/img/rooms-left.png'); ?>" alt="">
                    <a href="#" class="button-show-all-photos">
                        <i class="fas fa-image rooms-icon"></i>
                        <p class="m-0">Show all photos</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
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
                <div class="row">
                    <!-- Room Information -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up-right">
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
                    <!-- Stay Information -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header">
                                <h5 class="stay-info-title m-0">Stay Information</h5>
                            </div>
                            <div class="card-body stay-info-body">
                                <hr class="m-0" style="width: 65px;">
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
                    </div>
                    <!-- Amenities -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header amenities-header">
                                <h5 class="stay-info-title m-0">Amenities</h5>
                                <p class="m-0">About the property's amenities and services</p>
                            </div>
                            <div class="card-body amenities-body">
                                <hr class="m-0" style="width: 65px;">
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
                                    <div class="col-lg-4">
                                        <i class="far fa-pump-soap"></i>
                                        Shampoo, conditioner
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fal fa-toilet-paper-alt"></i>
                                        Towel
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="far fa-tooth"></i>
                                        Toothpaste
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fas fa-soap"></i>
                                        Soap
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fas fa-wind"></i>
                                        Hairdryer
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="far fa-router"></i>
                                        Internet
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="more-amenities-btn">
                                    View more 20 amenities
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Room Rates -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header amenities-header">
                                <h5 class="stay-info-title m-0">Room Rates</h5>
                                <p class="m-0">Prices may increase on weekends or holidays</p>
                            </div>
                            <div class="card-body">
                                <hr class="m-0" style="width: 65px;">
                                <div class="room-rate-list">
                                    <div class="col-lg-12 active">
                                        <span>Daily</span>
                                        <span>$554</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <span>Monthly</span>
                                        <span>$554</span>
                                    </div>
                                    <div class="col-lg-12 active">
                                        <span>Weekly</span>
                                        <span>$554</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <span>Yearly</span>
                                        <span>$554</span>
                                    </div>
                                    <div class="col-lg-12 active">
                                        <span>Empty Field</span>
                                        <span>$554</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <!-- Host Information -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header amenities-header">
                                <h5 class="stay-info-title m-0">Host Information</h5>
                            </div>
                            <div class="card-body">
                                <hr class="m-0" style="width: 65px;">
                                <div class="host-profile">
                                    <img src="assets/img/profile.jpeg" alt="..." class="profile-img">
                                    <div class="profile-info">
                                        <h5>Agung Guest House</h5>
                                        <p class="m-0">
                                            <i class="fas fa-star rating-star"></i>
                                            4.9 <span>(122 riviews) - 12 places</span>
                                        </p>
                                    </div>
                                </div>
                                <p class="m-0 host-desc">
                                    Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities...
                                </p>
                                <div class="host-superior">
                                    <div class="superiority">
                                        <i class="far fa-comment-alt-lines"></i>
                                        <span>Response rate - 100%</span>
                                    </div>
                                    <div class="superiority">
                                        <i class="far fa-clock"></i>
                                        <span>Fast response - within a few hours</span>
                                    </div>
                                </div>
                                <hr class="m-0" style="width: 65px;">
                            </div>
                            <div class="card-footer">
                                <button class="more-amenities-btn">
                                    See Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Riviews -->
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header amenities-header">
                                <h5 class="stay-info-title m-0">Riviews (23 riviews)</h5>
                            </div>
                            <div class="card-body">
                                <hr class="m-0" style="width: 65px;">
                                <div class="form-group rating-group">
                                    <div class="rating-widget">
                                        <input type="radio" name="rate" id="rate-1">
                                        <label for="rate-1" class="fas fa-star rating"></label>
                                        <input type="radio" name="rate" id="rate-2">
                                        <label for="rate-2" class="fas fa-star rating"></label>
                                        <input type="radio" name="rate" id="rate-3">
                                        <label for="rate-3" class="fas fa-star rating"></label>
                                        <input type="radio" name="rate" id="rate-4">
                                        <label for="rate-4" class="fas fa-star rating"></label>
                                        <input type="radio" name="rate" id="rate-5" checked>
                                        <label for="rate-5" class="fas fa-star rating"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="riview-group">
                                        <textarea name="input-riview" id="input-riview" placeholder="Share your thoughts ..." class="form-control"></textarea>
                                        <button class="btn-submit-riview"><i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="guest-riview">
                                    <img src="assets/img/profile.jpeg" alt="">
                                    <div class="riview">
                                        <div class="guest-info">
                                            <div class="guest-profile">
                                                <h5 class="m-0">Cody Fisher</h5>
                                                <span>May 20, 2024</span>
                                            </div>
                                            <div class="guest-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="m-0">
                                            There’s no stopping the tech giant. Apple now opens its 100th store in China.There’s no stopping the tech giant.
                                        </p>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="guest-riview">
                                    <img src="assets/img/profile.jpeg" alt="">
                                    <div class="riview">
                                        <div class="guest-info">
                                            <div class="guest-profile">
                                                <h5 class="m-0">Cody Fisher</h5>
                                                <span>May 20, 2024</span>
                                            </div>
                                            <div class="guest-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="m-0">
                                            There’s no stopping the tech giant. Apple now opens its 100th store in China.There’s no stopping the tech giant.
                                        </p>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="guest-riview">
                                    <img src="assets/img/profile.jpeg" alt="">
                                    <div class="riview">
                                        <div class="guest-info">
                                            <div class="guest-profile">
                                                <h5 class="m-0">Cody Fisher</h5>
                                                <span>May 20, 2024</span>
                                            </div>
                                            <div class="guest-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="m-0">
                                            There’s no stopping the tech giant. Apple now opens its 100th store in China.There’s no stopping the tech giant.
                                        </p>
                                    </div>
                                </div>
                                <hr class="m-0">
                            </div>
                            <div class="card-footer">
                                <button class="more-amenities-btn">
                                    View more 20 riview
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Things To Know --> 
                    <div class="col-lg-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-header amenities-header">
                                <h5 class="stay-info-title m-0">Things to know</h5>
                            </div>
                            <div class="card-body">
                                <hr style="width: 65px;">
                                <div class="ttk">
                                    <h5 class="m-0">Cancellation policy</h5>
                                    <p class="m-0">Refund 50% of the booking value when customers cancel the room within 48 hours after successful booking and 14 days before the check-in time. Then, cancel the room 14 days before the check-in time, get a 50% refund of the total amount paid (minus the service fee).</p>
                                </div>
                                <hr style="width: 65px;">
                                <div class="ttk">
                                    <h5 class="m-0">Check-in time</h5>
                                    <div class="check-in">
                                        <p class="m-0">Check-in</p>
                                        <p class="m-0">02:00 pm - 04:00 pm</p>
                                    </div>
                                    <div class="check-out">
                                        <p class="m-0">Check-out</p>
                                        <p class="m-0">10:00 am - 12:00 pm</p>
                                    </div>
                                </div>
                                <hr style="width: 65px;">
                                <div class="ttk">
                                    <h5 class="m-0">Special Note</h5>
                                    <p class="m-0 special-note">
                                        - Ban and I will work together to keep the landscape and environment green and clean by not littering, not using stimulants and respecting people around.
                                        <br><br>
                                        - Do not sing karaoke past 11:30
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Col - 4 -->
            <div class="col-lg-4">
                <div class="card" data-aos="fade-up-left">
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
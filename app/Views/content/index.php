<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>


<header id="header">
    <div class="row">
        <div class="col-lg-6 conten-header">
            <!-- content Text Header -->
            <div class="head-content-text">
                <h1 data-aos="zoom-in" class="text-heading">Feel the Comfort
                    <br>
                    of your Home
                    <br>with us
                </h1>
            </div>
            <!-- conten box boking header -->
            <div
                data-aos="fade-up-left"
                class="head-content-box-boking shadow px-4 py-4  bg-body-tertiary rounded">
                <div class="d-flex">
                    <h5 class="change">7,000,000</h5>
                    <span>/month</span>
                </div>
                <div class="form-header-input-boking">
                    <?php $date = date("Y-m-d");?>
                    <form action="/save">
                        <div class="form">
                            <div class="form-input-checkin">
                                <label for="checkin" class="checkin-label">Chek In</label>
                                <input
                                    type="date"
                                    class="form-control-plaintext checkin-input"
                                    placeholder="<?= $date; ?>"
                                    value="<?= $date; ?>"
                                    name="checkin"
                                    id="checkin">
                            </div>
                            <div class="form-input-checkout">
                                <label for="checkout" class="checkout-label">Chek Out</label>
                                <input
                                    type="date"
                                    placeholder="<?= $date; ?>"
                                    value="<?= $date; ?>"
                                    class="form-control-plaintext checkout-input"
                                    name="checkout"
                                    id="checkin">
                            </div>
                        </div>
                        <div class="room-tipe">
                            <label class="form-label" for="room-type">Room Type :</label>
                            <select class="form-control-plaintext" name="room-type" id="room-type">
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Superior Room">Superior Room</option>
                            </select>
                        </div>
                        <div class="guest-member">
                            <label class="form-label fw-bold" for="guest-member">Guest Member</label>
                            <input
                                type="text"
                                name="guest-member"
                                placeholder="Write Hire.."
                                id="guest-member"
                                class="form-control-plaintext form-input">
                        </div>
                        <button class="order" type="submit">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 conten-header">
            <div class="row img-conten-header ">
                <div class="col-lg-6">
                    <img
                        data-aos="fade-down"
                        class="mb-4 img-content-1"
                        src="<?= base_url('assets/img/room.png'); ?>"
                        alt="picture">
                    <img
                        class="img-content-2"
                        data-aos="fade-right"
                        src="<?= base_url('assets/img/window.png'); ?>"
                        alt="picture">

                </div>
                <div class="col-lg-6 hiden" data-aos="fade-up">
                    <img
                        class="img-content-3"
                        src="<?= base_url('assets/img/loby.png'); ?>"
                        alt="picture">
                </div>
            </div>
        </div>
    </div>
</header>

<section id="room-katalog">
    <div class="room-katalog-title">
        <h2 class="title">Rooms Katalog</h2>
    </div>
    <div class="row">
        <div class="col-lg-6  room-list-content">
            <div class="box-list-content-img shadow bg-body-tertiary rounded">
                <img class="rounded-top img" src="<?= base_url('assets/img/room.png'); ?>" alt="picture">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="count">Rp 7,000,000</span>
                            <span class="secondary">/night</span>
                        </div>
                        <div class="col-lg-6 text-end">
                            <i class="bi bi-star-fill star"></i>
                            <span class="fw-bold rete">4.9</span>
                            <span class="secondary">(122)</span>
                        </div>
                    </div>
                    <span class="card-text pt-3 grey">Entire cabin · 1 beds</span>
                    <h5 class="card-title fw-bold py-3">Deluxe Room</h5>
                    <span class="secondary">
                        <i class="bi bi-geo-alt"></i>
                        Agung Guest House</span><br>
                    <a href="<?= base_url('/rooms'); ?>" class="btn buton-order">Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6  room-list-content">
        <div class="box-list-content-img shadow bg-body-tertiary rounded">
                <img class="rounded-top img" src="<?= base_url('assets/img/window.png'); ?>" alt="picture">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="count">Rp 7,000,000</span>
                            <span class="secondary">/night</span>
                        </div>
                        <div class="col-lg-6 text-end">
                            <i class="bi bi-star-fill star"></i>
                            <span class="fw-bold rete">4.9</span>
                            <span class="secondary">(122)</span>
                        </div>
                    </div>
                    <span class="card-text pt-3 grey">Entire cabin · 1 beds</span>
                    <h5 class="card-title fw-bold py-3">Superior Room</h5>
                    <span class="secondary">
                        <i class="bi bi-geo-alt"></i>
                        Agung Guest House</span><br>
                    <a href="<?= base_url('/rooms'); ?>" class="btn buton-order">Explore
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="benefits-at-room">
    <div class="row">
        <div class="col-lg-6 conten-benefit">
            <img src="<?= base_url('assets/img/frot_view.png'); ?>" alt="picture" class="conten-benefit-img">
        </div>
        <div class="col-lg-6 conten-benefit">
            <h2 data-aos="fade-lrft" class="conten-benefit-title">Benefits of using <br> our services </h2>
                <!-- Benefit 1 -->
                <div class="conten-benefit-lists" data-aos="fade-up">
                    <div class="conten-benefit-list">
                        <div class="circle">
                            <span class="conten-benefit-list-nuber">01</span>
                            <div class="quadrant quadrant3"></div>
                        </div>
                        <div class="conten-benefit-descritions">
                            <div class="conten-benefit-descrition">
                                <p class="conten-benefit-descrition-title">Complete <br> Facilities & Free Wifi</p>
                                <p class="conten-benefit-descrition-text">We provide a smart TV, refrigerator, free mineral water, save box and free wifi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conten-benefit-lists" data-aos="fade-up">
                    <div class="conten-benefit-list">
                        <div class="circle">
                            <span class="conten-benefit-list-nuber">02</span>
                            <div class="quadrant quadrant3"></div>x
                        </div>
                        <div class="conten-benefit-descritions left">
                            <div class="conten-benefit-descrition">
                                <p class="conten-benefit-descrition-title">Strategic Location</p>
                                <p class="conten-benefit-descrition-text">You can easily access other famous spot like Brawa beach, canggu, and we just 45 minutes from the airport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conten-benefit-lists" data-aos="fade-up">
                    <div class="conten-benefit-list">
                        <div class="circle">
                            <span class="conten-benefit-list-nuber">03</span>
                            <div class="quadrant quadrant3"></div>
                        </div>
                        <div class="conten-benefit-descritions">
                            <div class="conten-benefit-descrition">
                                <p class="conten-benefit-descrition-title">Free Electicity</p>
                                <p class="conten-benefit-descrition-text">free electricity up to Rp. 500K per month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonial">
        <h2 class="fw-bold text-center" data-aos="fade-up">Testimonial</h2>
        <p class="text-center grey" data-aos="fade-up">Our customer, that satisfied with us</p>
        <div class="row">
            <div class="col-lg-4 mt-5" data-aos="zoom-in">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="des-profile mx-auto row mb-4" style="width: 200px;">
                            <div class="col-lg-6">
                                <img
                                    src="<?= base_url('assets/img/profile.jpeg'); ?>"
                                    alt="picture"
                                    class="profile">
                            </div>
                            <div class="col-lg-6 text-profil">
                                <span class="fw-bold">Ms. Chiki</span>
                                <br>
                                <i class="bi bi-star-fill rating-star"></i>
                                <span class="fw-bold ret">4.9</span>
                            </div>
                        </div>
                        <p class="card-text">
                            "I had an amazing stay at this guest house! The staff were incredibly friendly
                            and went out of their way to make me feel at home. The room was clean, spacious,
                            and had all the amenities I needed. Plus, the location is perfect—just a short
                            walk to local restaurants and shops. I would definitely stay here again!"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5" data-aos="zoom-in">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="des-profile mx-auto row mb-4" style="width: 200px;">
                            <div class="col-lg-6">
                                <img
                                    src="<?= base_url('assets/img/profile.jpeg'); ?>"
                                    alt="picture"
                                    class="profile">
                            </div>
                            <div class="col-lg-6 text-profil">
                                <span class="fw-bold">Mr. Jhon</span>
                                <br>
                                <i class="bi bi-star-fill rating-star"></i>
                                <span class="fw-bold ret">5</span>
                            </div>
                        </div>
                        <p class="card-text">
                            The guest house was cozy and comfortable. The room was a bit smaller than I
                            expected, but it was well-maintained and had a nice, homey feel. The breakfast
                            was delicious, and I loved the garden area for relaxing. It’s a great place for
                            travelers who want a peaceful atmosphere.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5" data-aos="zoom-in">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="des-profile mx-auto row mb-4" style="width: 200px;">
                            <div class="col-lg-6">
                                <img
                                    src="<?= base_url('assets/img/profile.jpeg'); ?>"
                                    alt="picture"
                                    class="profile">
                            </div>
                            <div class="col-lg-6 text-profil">
                                <span class="fw-bold">Sir. Baba</span>
                                <br>
                                <i class="bi bi-star-fill rating-star"></i>
                                <span class="fw-bold ret">4.9</span>
                            </div>
                        </div>
                        <p class="card-text">
                            "The guest house was okay, but not exactly what I expected. The room was clean,
                            but the walls were a bit thin, so I could hear noise from the other rooms. The
                            staff were nice, though, and the location was very central. It’s a decent place
                            if you're just looking for somewhere to sleep."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->EndSection(); ?>
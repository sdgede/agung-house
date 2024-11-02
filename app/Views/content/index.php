<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>

<div class="container mt-5">

    <!-- header Section -->
    <header id="header">
        <div class="row">
            <div  class="col-lg-6">
                <h1 data-aos="fade-up-left" class="fw-bold title" style="text-transform: capitalize;">Feel
                    the Comfort
                    <br>
                    of your Home
                    <br>with us
                </h1>

                <!-- harga -->
                <div data-aos="fade-up-left" class="shadow px-4 py-4  bg-body-tertiary rounded  hed-checkin" style=" margin-top:80px;"
                >
                    <div class="card-header">
                        <div class="d-flex">
                            <h5 class="fs-5 fw-bold">Rp. 7.000.000</h5>
                            <span style="font-size:12px;">
                                /month</span>
                        </div>

                        <div class="card-bod text-center my-4 ">
                            <form action="" class="d-flex row  ">
                                <div class="col-lg-6 checkin py-2 border">
                                    <label for="Check-in border border-3">Check-in</label>
                                    <br>
                                    <input type="date" name="Check-in" id="Check-in" class="input_none">
                                </div>
                                <div class="col-lg-6 checkout py-2 border border-start-3">
                                    <label for="Check-out">Check-out</label>
                                    <br>
                                    <input type="date" name="Check-out" id="Check-out" class="input_none">
                                </div>
                                <div class="col-lg-12 text-start guest py-2 border border-top-0  ">
                                    <label for="Guest" class="fw-bold pl-1">Guest</label><br>
                                    <select class="input_none pt-2">
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guest</option>
                                        <option value="4">4 Guest</option>
                                        <option value="6">6 Guest</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <a href="https://api.whatsapp.com/send/?phone=6282147836034&text=tess"
                                        class="btn btn_ku">Book Now</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- img header -->
            <div class="col-lg-6">
                <div class="row heder-img ">
                    <div class="col-lg-6">
                        <img data-aos="fade-down" class="mb-4" src="<?= base_url('assets/img/room.png'); ?>" width="100%" alt="picture">
                        <img data-aos="fade-right" src="<?= base_url('assets/img/window.png'); ?>" alt="picture" width="100%">

                    </div>
                    <div class="col-lg-6 hiden" data-aos="fade-up">
                        <img style="margin-top:100px" src="<?= base_url('assets/img/loby.png'); ?>" alt="picture"
                            width="100%">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->

    <!-- rooms section -->
    <section id="rooms" style=" margin-top:140px;">
        <div class="row">
            <h3 data-aos="fade-down-left" class="fw-bold mb-3">Rooms Katalog</h3>
            <div class="col-lg-6">
                <div class="card" data-aos="fade-left">
                    <img  src="<?= base_url('assets/img/room.png'); ?>" class="card-img-top rounded-top" alt="picture"
                        height="380px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="fw-bold">$200</span>
                                <span class="grey">
                                    /night</span>
                            </div>
                            <div class="col-lg-6 text-end">
                                <i class="bi bi-star-fill star"></i>
                                <span class="fw-bold ret">4.9</span>
                                <span class="grey">
                                    (122)</span>
                            </div>
                        </div>
                        <span class="card-text pt-3 grey">Entire cabin · 1 beds</span>
                        <h5 class="card-title fw-bold py-3">Deluxe Room</h5>
                        <span class="grey">
                            <i class="bi bi-geo-alt"></i>
                            Agung Guest House</span><br>
                        <a href="#" class="btn btn_m fw-bold">Explore
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card rounded-top" data-aos="fade-right">
                    <img src="<?= base_url('assets/img/window.png'); ?>" class="card-img-top" alt="picture"
                        height="380px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="fw-bold">$200</span>
                                <span class="grey">
                                    /night</span>
                            </div>
                            <div class="col-lg-6 text-end">
                                <i class="bi bi-star-fill star"></i>
                                <span class="fw-bold ret">4.9</span>
                                <span class="grey">
                                    (122)</span>
                            </div>
                        </div>
                        <span class="card-text pt-3 grey">Entire cabin · 1 beds</span>
                        <h5 class="card-title fw-bold py-3">Superior Room</h5>
                        <span class="grey">
                            <i class="bi bi-geo-alt"></i>
                            Agung Guest House</span><br>
                        <a href="#" class="btn btn_m fw-bold">Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section rooms -->

    <!-- Section binefits -->

    <section id="benefits" style="margin: 100px 0;">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-left">
                <img src="<?= base_url('assets/img/frot_view.png'); ?>" alt="Pictre" class=""
                    style="width: 100%;  height: 90vh; border-radius:  0px 50% 0 0;">
            </div>

            <div class="col-lg-6" style="padding-left:80px;">
                <h2 data-aos="fade-lrft" class="mb-4 fw-bold" style="font-size:50px; line-height: 40px; text-transform:capitalize;">Benefits
                    of using
                    <br>
                    our services
                </h2>

                <!-- Benefit 1 -->
                <div class="m-benefit" data-aos="fade-up">
                    <div class="benefit">
                        <div class="circle">
                            <span class="benefit-number">01</span>
                            <div class="quadrant quadrant3"></div>
                        </div>
                        <div>
                            <div class="list-benefite">
                                <p class="benefit-title">Complete
                                    <br>
                                    Facilities & Free Wifi
                                </p>
                                <p class="benefit-description">We provide a smart TV, refrigerator, free mineral water,
                                    save box and free wifi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-benefit" data-aos="fade-up-right" >
                    <div class="benefit">
                        <div class="circle">
                            <span class="benefit-number">02</span>
                            <div class="quadrant quadrant3"></div>
                        </div>
                        <div>
                            <div class="list-benefite">
                                <p class="benefit-title">Strategic
                                    <br>
                                    Location
                                </p>
                                <p class="benefit-description">You can easily access other famous spot like
                                    Brawa beach, canggu, and we just 45 minutes from the airport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-benefit" data-aos="fade-up-left">
                    <div class="benefit">
                        <div class="circle">
                            <span class="benefit-number">03</span>
                            <div class="quadrant quadrant3"></div>
                        </div>
                        <div>
                            <div class="list-benefite">
                                <p class="benefit-title">Free Electicity</p>
                                <p class="benefit-description">free electricity up to Rp. 500K per month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

        <!-- Section Testimonial -->
        <section
            id="testimonial"
            style="background: #FFF7ED; border-radius: 20px; padding:100px;">
            <h2 class="fw-bold text-center"data-aos="fade-up" >Testimonial</h2>
            <p class="text-center grey" data-aos="fade-up" >Our customer, that satisfied with us</p>
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
                                    <span class="fw-bold">Mr.  Jhon</span>
                                    <br>
                                    <i class="bi bi-star-fill rating-star"></i>
                                    <span class="fw-bold ret">5</span>
                                </div>
                            </div>
                            <p class="card-text">
                            The guest house was cozy and comfortable. The room was a bit smaller than I expected, but it was well-maintained and had a nice, homey feel. The breakfast was delicious, and I loved the garden area for relaxing. It’s a great place for travelers who want a peaceful atmosphere.</p>
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
                            "The guest house was okay, but not exactly what I expected. The room was clean, but the walls were a bit thin, so I could hear noise from the other rooms. The staff were nice, though, and the location was very central. It’s a decent place if you're just looking for somewhere to sleep."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->EndSection(); ?>
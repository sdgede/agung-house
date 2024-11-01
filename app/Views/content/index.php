<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>

<div class="container mt-5">

    <!-- header Section -->
    <header id="header">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <h1 class="fw-bold title" style="text-transform: capitalize; font-size:60px;" data-aos="fade-up">Feel
                    the Comfort
                    <br>
                    of your Home
                    <br>with us
                </h1>

                <!-- harga -->
                <div class="shadow px-4 py-4  bg-body-tertiary rounded" style="width:300px; margin-top:80px;"
                    data-aos="fade-up">
                    <div class="card-header">
                        <div class="d-flex">
                            <h5 class="fs-5 fw-bold" data-aos="fade-up">Rp. 7.000.000</h5>
                            <span style="font-size:12px;">
                                /month</span>
                        </div>

                        <div class="card-bod text-center my-4 " data-aos="fade-up">
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
            <div class="col-lg-6 " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="mb-4" src="<?= base_url('assets/img/room.png'); ?>" width="100%" alt="picture">
                        <img src="<?= base_url('assets/img/window.png'); ?>" alt="picture" width="100%">

                    </div>
                    <div class="col-6">
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
            <h3 class="fw-bold mb-3" data-aos="fade-up">Rooms Katalog</h3>
            <div class="col-lg-6">
                <div class="card" data-aos="fade-up">
                    <img src="<?= base_url('assets/img/room.png'); ?>" class="card-img-top rounded-top" alt="picture"
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
                <div class="card rounded-top" data-aos="fade-up">
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
            <div class="col-lg-6">
                <img src="<?= base_url('assets/img/frot_view.png'); ?>" alt="Pictre" class=""
                    style="width: 100%;  height: 90vh; border-radius:  0px 50% 0 0;">
            </div>

            <div class="col-lg-6" style="padding-left:80px;">
                <h2 class="mb-4 fw-bold" style="font-size:50px; line-height: 40px; text-transform:capitalize;">Benefits
                    of using
                    <br>
                    our services
                </h2>

                <!-- Benefit 1 -->
                <div class="m-benefit">
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
                <div class="m-benefit">
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
                <div class="m-benefit">
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

    <!--End Section binefits -->

    <!-- Section Testimonial -->
    <section id="testimonial" style="background: #FFF7ED; border-radius: 20px;">
        <h2 class="fw-bold">Testimonial</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--End Section Testimonial -->
</div>

<?= $this->EndSection(); ?>
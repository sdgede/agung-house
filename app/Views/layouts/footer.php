<hr>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="box10">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
                    <span> </span>
                    <a class="navbar-brand fw-bold fs-5" href="#">Agung Guest House</a>
                </div>
                <div class="box9">
                    <i class="fab fa-facebook"></i>
                    <a class="navbar-brand fs-7" href="#">Facebook</a>

                </div>
                <div class="box9">
                    <i class="fa-brands fa-x-twitter"></i>
                    <a class="navbar-brand fs-7" href="#">Twiter</a>
                </div>


                <div class="box9">
                    <i class="fab fa-instagram"></i>
                    <a class="navbar-brand fs-7" href="#">Facebok</a>
                </div>


                <div class="box9">
                    <i class="fab fa-youtube"></i>
                    <a class="navbar-brand fs-7" href="#">Youtube</a>
                </div>

            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d246.51503045125406!2d115.16453023354784!3d-8.668664746143921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1730431749168!5m2!1sid!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>
<!--  -->
<section id="copiright">
  <h4>Copiright </h4>
</section>
<script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('AOS/src/js/aos.js'); ?>"></script>
<script>
$(document).on('ready', function() {
    // initialization of aos
    AOS.init({
        duration: 650,
        once: true
    });
});
</script>
</body>

</html>
<footer>
    <div class="container col-md-12 mx-auto p-5">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
                <span> </span>
                <a class="navbar-brand fw-bold fs-5" href="#header">Agung Guest House</a>
                <p>Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.</p>
                <a href="<?= base_url('/rooms'); ?>" class="btn buton-order">Book Now
                </a>
            </div>
            <div class="col-lg-4">
                <div class="social-media">
                    <div class="facebok">
                        <a href="#"><i class="bi bi-facebook"></i> <span>agunghouse</span></a>
                    </div>
                    <div class="youtube">
                        <a href="#"><i class="bi bi-youtube"></i> <span>Agung House</span></a>
                    </div>
                    <div class="twit">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i> <span>@agunghouse</span> </a>
                    </div>
                    <div class="ig">
                        <a href="https://www.instagram.com/megd.idr/?hl=id"><i class="bi bi-instagram"></i> <span>@agungGuesthouse</span></a>
                    </div>
                    <div class="ig">
                        <a href=""><i class="bi bi-geo"></i> <span>Jl. Umalas</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="map"></div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright">
        <span>Production By Agung House</span><span>&copy; </span>
    </div>
</footer>

<!-- leaft js maps -->
<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

<script>
    // Koordinat lokasi awal
    const lokasiAwal = [-8.6722646, 115.2078467]; // Contoh: Bali

    // Buat peta
    const map = L.map("map").setView(lokasiAwal, 13);

    // Tambahkan layer peta dari OpenStreetMap
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution: "© OpenStreetMap contributors",
    }).addTo(map);

    // Tambahkan marker
    L.marker(lokasiAwal).addTo(map).bindPopup("Agung Guest House").openPopup();
</script>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('AOS/src/js/aos.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init({

        duration: 1000, // durasi animasi dalam milidetik
        once: false // animasi hanya berjalan sekali
    });
</script>

<!-- harga  room setipa type -->
<script>
    // Ambil elemen untuk menampilkan harga
    const priceElement = document.querySelector('.change');

    // Ambil semua radio button untuk room type
    const roomTypeRadios = document.querySelectorAll('input[name="room-type"]');

    // Tambahkan event listener untuk setiap radio button
    roomTypeRadios.forEach(radio => {
        radio.addEventListener('change', (event) => {
            // Dapatkan harga dari data-price
            const selectedPrice = event.target.getAttribute('data-price');
            // Perbarui elemen harga
            priceElement.textContent = selectedPrice;
        });
    });
</script>

<!-- datePicker -->
<script>
    flatpickr("#datePicker", {
        dateFormat: "d F Y", // Format: Tanggal Nama Bulan Tahun
        altInput: true, // Input yang terlihat oleh user
        altFormat: "d F Y", // Format yang ditampilkan
    });
</script>


</body>

</html>
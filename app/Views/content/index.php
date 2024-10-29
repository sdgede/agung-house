<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="room-card p-3 mb-4">
                <img
                    src="main-room.jpg"
                    alt="Main Room"
                    class="img-fluid w-100 mb-2"
                    style="border-radius: 8px;">
                <button class="btn btn-outline-secondary btn-sm">Show all photos</button>
            </div>
            <div class="gallery d-flex gap-2 mb-4">
                <img src="photo1.jpg" class="w-25">
                <img src="photo2.jpg" class="w-25">
                <img src="photo3.jpg" class="w-25">
                <img src="photo4.jpg" class="w-25">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="p-4 border rounded-3">
                <h5>Villa Room</h5>
                <h3>Room 1</h3>
                <p>
                    <i class="bi bi-star-fill text-warning"></i>
                    4.9 (122 reviews) • Tokyo, Japan</p>
                <h4>$200
                    <small>/night</small>
                </h4>
                <div class="d-flex justify-content-between mt-3">
                    <span>Check in</span>
                    <span>Check out</span>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <span>Aug 12</span>
                    <span>Aug 18</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->EndSection(); ?>
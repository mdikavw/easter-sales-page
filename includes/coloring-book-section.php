<div class="container-fluid p-5 d-flex flex-column align-items-center bg-primary">
    <h3 class="mb-5 fw-semibold">Coloring Book Bundle</h3>
    <div class="row justify-content-center align-items-center mb-5 w-75">
        <div class="col-md-6">
            <p>
                Easter isn't just about egg hunts and chocolate bunnies—it's also a time for creativity and relaxation.
                Coloring isn't just for kids; it's a proven stress-reliever for adults too, and a perfect addition to
                your yoga routine.

                As a business owner, you can draw in more customers and enhance your revenue by offering these free
                Easter coloring pages. And why not take it a step further? Create beautiful Easter coloring books for
                sale.

                With this bundle, you'll receive 10 delightful Easter-themed coloring pages in both .png and .PSD
                formats (2500 x 3300 pixels). Use them as is or tweak them to your heart's content. Let the Easter
                spirit and creativity flow!"
            </p>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <img src="https://via.placeholder.com/300x400" alt="Placeholder Image" />
        </div>
    </div>
    <div class="row justify-content-center">
        <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="col-md-2">
            <img src="https://via.placeholder.com/300x400" class="img-fluid mb-4">
        </div>
        <?php if (($i + 1) % 5 === 0) : ?>
    </div>
    <div class="row justify-content-center">
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>
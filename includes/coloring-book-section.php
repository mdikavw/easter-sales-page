<div class="container-fluid">
    <div class="row p-5 coloring-book-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>Coloring Book Bundle</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-md-6">
                <p>
                    Easter isn't just about egg hunts and chocolate bunnies—it's also a time for creativity and
                    relaxation.
                    Coloring isn't just for kids; it's a proven stress-reliever for adults too, and a perfect addition
                    to
                    your yoga routine.

                    With this bundle, you'll receive 10 delightful Easter-themed coloring pages in both .png and .PSD
                    formats (2500 x 3300 pixels). Use them as is or tweak them to your heart's content. Let the Easter
                    spirit and creativity flow!"
                </p>
            </div>
            <div class="col-md-6">
                <img src="asset/coloring-book/MockupColoringBook2.png" alt="Placeholder Image" />
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center p-5">
        <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="col d-flex justify-content-center">
            <img src="https://via.placeholder.com/300x400" class="img-fluid mb-4">
        </div>
        <?php endfor; ?>
    </div>
</div>
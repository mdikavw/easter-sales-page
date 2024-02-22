<div class="container-fluid p-5 d-flex flex-column align-items-center">
    <h3 class="mb-5 fw-semibold">25 Heart-warming Easter Quotes</h3>

    <div class="row justify-content-center align-items-center mb-5 px-5">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="https://via.placeholder.com/300x400" alt="Placeholder Image" />
        </div>
        <div class="col-md-6">
            <p>
                We've simplified the process so you can effortlessly design t-shirts, mugs, notebooks, stickers, towels,
                phone cases, and more. You have the flexibility to use these ready-made templates or, for advanced
                customization, download the PSD files and make changes to your heart's content.

                Never dipped your toes into product sales like this? Not a problem. We'll guide you through the process,
                ensuring you can set up shop quickly without any initial investment or the need to keep physical product
                inventory on hand.

                Get ready to unleash your creativity and design an array of Easter-themed SVGs. These designs will make
                your products stand out and elevate the holiday spirit in all your merchandise
            </p>
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
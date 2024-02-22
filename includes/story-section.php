<div class="container-fluid p-5 d-flex flex-column align-items-center bg-primary">
    <h3 class="mb-5 fw-semibold">Easter Bliss: Content Template Collection</h3>
    <div class="row justify-content-center align-items-center mb-5 w-75">
        <div class="col-md-6">
            <p>
                Are you ready for Easter? 🐣 Our Easter Bliss: Digital Collection is here to make your holiday marketing
                easy and fun. With beautifully designed Pinterest pins, Instagram Stories templates, and customizable
                graphics, you'll have everything you need to create an egg-straordinary campaign. Plus, our PLR and CR
                rights mean you can sell the content as your own. Don't miss out on this opportunity to dazzle your
                audience this Easter season!
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
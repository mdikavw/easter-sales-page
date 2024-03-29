<div class="container-fluid">
    <div class="row svg-section">
        <?php
        include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <h2 id="title-summary1">25 Printable SVGs For Your Products</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4 mb-5">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="asset/svg-display/display.png" alt="Placeholder Image" style="width: 100%;" />
            </div>
            <div class="col-md-6">
                <p id="headline-content">
                    We've simplified the process so you can effortlessly design t-shirts, mugs, notebooks, stickers,
                    towels,
                    phone cases, and more. <br><br>You have the flexibility to use these ready-made templates or, for advanced
                    customization, download the PSD files and make changes to your heart's content. <br><br>

                    Get ready to unleash your creativity and design an array of Easter-themed SVGs. These designs will
                    make
                    your products stand out and elevate the holiday spirit in all your merchandise
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 justify-content-center mt-5" style="margin-bottom: 100px;">
            <?php
            $dir = "asset/svg-display";
            $pngFiles = [];
            for ($i = 1; $i <= 4; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '" style ="padding: 0;">';
            }
            ?>
        </div>
    </div>
</div>
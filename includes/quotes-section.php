<div class="container-fluid">
    <div class="row quotes-section">
        <?php
        include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <h2 id="title-summary1">Easter Viral Quote Designs #1 <br>
                <span class="poppins-regular" style="font-size: 1.8rem;">( For Facebook & Instagram Feed )</span></h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-5">
            <div class="col-md-7">
                <p id="headline-content" class="text-center">
                    Captivate your audience with our collection of Easter-inspired quotes tailored for Facebook, Instagram, and beyond. Spark conversations, inspire action, and forge deeper connections with your followers. </p>
                </div>
            </div>
            <!-- <div class="col-md-6 d-flex justify-content-center mb-5">
                <img src="asset/easter-quotes/display.png" width="400" alt="Placeholder Image" />
            </div> -->
    </div>
    <div class="container">
        <div class="row row-cols-1 justify-content-center mt-5" style="margin-bottom: 100px;">
            <?php
            $dir = "asset/easter-quotes";
            $pngFiles = [];
            for ($i = 1; $i <= 2; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '">';
            }
            ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row story-section">
        <?php
        include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <h2 id="title-summary1">Easter Viral Quote Designs #2 <br>
                <span class="poppins-regular" style="font-size: 1.8rem;">( For Story, Reels, and Pinterest )</span></h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-5">
            <div class="col-md-7">
                <p id="headline-content" class="text-center">
                    Captivate your audience with our collection of Easter-inspired quotes tailored for Story, Reels, and Pinterest. Spark conversations, inspire action, and forge deeper connections with your followers.
                </p>
            </div>
        </div>
        <!-- <div class="col-md-6 d-flex justify-content-center mb-5">
            <img src="asset/pinterest-story/1.png" width="300" alt="Placeholder Image" />
        </div> -->
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center mt-5" style="margin-bottom: 100px;">
            <?php
            $dir = "asset/pinterest-story";
            $pngFiles = [];
            for ($i = 1; $i <= 15; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '" style="max-width: 300px; margin-bottom: 25px;">';
            }
            ?>
        </div>
    </div>
</div>
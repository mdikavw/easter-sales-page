<div class="container-fluid">
    <div class="row p-5 story-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>Easter Bliss: Content Template Collection</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-md-6">
                <p>
                    Are you ready for Easter? 🐣 Our Easter Bliss: Digital Collection is here to make your holiday
                    marketing
                    easy and fun. With beautifully designed Pinterest pins, Instagram Stories templates, and
                    customizable
                    graphics, you'll have everything you need to create an egg-straordinary campaign. Plus, our PLR and
                    CR
                    rights mean you can sell the content as your own. Don't miss out on this opportunity to dazzle your
                    audience this Easter season!
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="asset/pinterest-story/1.png" width="300" alt="Placeholder Image" />
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center p-5 g-4">
        <?php
            $dir = "asset/pinterest-story";
            $pngFiles = [];
            for ($i = 1; $i <= 35; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '" style="max-width: 300px">';
            }
        ?>
    </div>
</div>
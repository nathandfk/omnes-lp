<?php 
$cursus = Sections::cursus();
?>
<section class="cursus-wrapper my-0">
    <div class="cursus-inner ualp-container">
        <div class="cursus ualp-w-adpt">
            <h2 class="cursus-title text-white">Envie de mettre de l’international dans ton cursus ?</h2>
            <div class="first-three-years-items">
                <?php foreach ($cursus as $logo => list($number, $description)) { ?>
                    <div class="first-three-years-card">
                        <div class="first-three-years-col-1">
                            <div class="first-three-years-title">
                                <img src="<?php echo $logo; ?>" srcset="<?php echo $logo; ?>" alt="<?php echo $description; ?>">
                            </div>
                        </div>
                        <div class="first-three-years-col-2">
                            <?php if (!empty($number)) : ?>
                                <h3 class="first-three-years-subtitle text-orange fs-48"><?php echo $number; ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($description)) : ?>
                                <p class="first-three-years-description"><?php echo $description; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="ualp-section-link"><a href="" class="ualp-btn section-btn-click-white">Portes ouvertes</a></div>
        </div>
    </div>
</section>
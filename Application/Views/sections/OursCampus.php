<?php $ours_campus = Sections::ours_campus(); ?>
<section class="ours-campus-wrapper my-0">
    <div class="ours-campus-inner ualp-container">
    <div class="ours-campus ualp-w-adpt">
        <h2 class="ours-campus-title">Nos Campus</h2>
        <div class="ours-campus-items">
            <?php foreach ($ours_campus as $our_campus => $link) { ?>
                <div class="our-campus-item">
                    <h3 class="our-campus-city"><?php echo $our_campus; ?></h3>
                    <a href="<?php echo $link; ?>" class="text-orange ff-montserrat400">S'inscrire <i class="fas fa-arrow-right"></i></a>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
</section>
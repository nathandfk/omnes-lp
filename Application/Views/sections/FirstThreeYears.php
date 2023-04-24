<?php 
$first_three_years = Sections::first_three_years();
?>
<section class="areas-activity-wrapper ualp-container">
    <div class="areas-activity ualp-w-adpt">
        <h2 class="areas-activity-title">Les 3 première années chez Sup de Pub</h2>
        <p>Les bachelors de Sup de Pub te préparent aux métiers de demain : pédagogie immersive, cas concrets, stages, séminaires, masterclass.</p>
        <div class="first-three-years-items">
            <?php foreach ($first_three_years as $level => list($year, $subtitle, $subdescription, $description)) { ?>
                <div class="first-three-years-card">
                    <div class="first-three-years-col-1">
                        <div class="first-three-years-title">
                            <span class="fs-32"><?php echo $level; ?></span>
                            <span class="fs-20"><?php echo $year; ?></span>
                        </div>
                    </div>
                    <div class="first-three-years-col-2">
                            <?php if (!empty($subtitle)) : ?>
                                <h3 class="first-three-years-subtitle text-orange"><?php echo $subtitle; ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($subdescription)) : ?>
                                <span class="first-three-years-subdescription text-light-grey-v4"><?php echo $subdescription; ?></span>
                            <?php endif; ?>
                            <?php if (!empty($description)) : ?>
                                <span class="first-three-years-description"><?php echo $description; ?></span>
                            <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <p>*Alternance possible 2j école/3j entreprise. Formation certifiante</p>
        <div class="ualp-section-link"><a href="" class="ualp-btn section-btn-click-orange">Je postule</a></div>
    </div>
</section>
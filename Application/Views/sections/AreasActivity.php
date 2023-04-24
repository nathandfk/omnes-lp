<?php 
$areas_activity = Sections::areas_activity();
?>
<section class="areas-activity-wrapper ualp-container">
    <div class="areas-activity ualp-w-adpt">
        <h2 class="areas-activity-title">8 domaines d’activités</h2>
        <div class="areas-activity-items">
            <?php foreach ($areas_activity as $title => $picture) { ?>
            <div class="areas-activity-card">
                <div class="area-activity-logo-wrapper">
                    <img src="<?php echo $picture; ?>" srcset="<?php echo $picture; ?>" alt="<?php echo $title; ?>" class="area-activity-logo">
                </div>
                <h3 class="area-activity-title"><?php echo $title; ?></h3>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
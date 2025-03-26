<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het bootstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a> |
            <a href="<?= URLROOT; ?>/sneakers/index">Mooiste sneakers</a> | 
            <a href="<?= URLROOT; ?>/horloges/index">Duurste Horloges</a> | 
            <a href="<?= URLROOT; ?>/torens/index">Hoogste Torens</a>     |
            <a href="<?= URLROOT; ?>/speakers/index">Beste Speakers</a>     |
            <a href="<?= URLROOT; ?>/zangeres/index">Beste Zangeressen</a> |
            <a href="<?= URLROOT; ?>/ufc/index">UFC Mens Pound-For-Pound Ranking</a> |
            


        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
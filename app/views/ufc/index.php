<?php require_once APPROOT . '/views/includes/header.php'; ?>
 
<div class="container mt-3">
 
<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="text-warning"><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>
 
 
   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Ranglijstummer</th>  
                        <th scope="col">Lengte</th>
                        <th scope="col">Gewicht</th>
                        <th scope="col">Leeftijd</th>      
                        <th scope="col">WinstDoorKnockout</th>              
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Ufc'] as $Ufc) : ?>
                        <tr>
                            <td><?= $Ufc->Naam; ?></td>
                            <td><?= $Ufc->RanglijstNummer; ?></td>
                            <td><?= $Ufc->Lengte; ?></td>
                            <td><?= $Ufc->Gewicht; ?></td>
                            <td><?= $Ufc->Leeftijd; ?></td>
                            <td><?= $Ufc->WinstDoorKnockout; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->
 
<?php require_once APPROOT . '/views/includes/footer.php'; ?>
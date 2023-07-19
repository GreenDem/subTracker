<div class="top">
    <h1>SubTracker</h1>
    <p>Bonjour <?= $users->firstname ?>,</p>
    <p>Cout mensuel moyen <?= $cost ?> €</p>
    <p>Ce mois-ci tes paiements seront de <?= $payment ?> €</p>
</div>
<?php if (SessionFlash::checkMessage()) { ?>
    <div class="alert">
        <?= SessionFlash::getMessage() ?>
    </div>
<?php } ?>
<div class="cardContainer">
    <?php foreach ($subscriptions as $sub) { 
        $deleteSub = json_encode($sub);?>

        <div class="card">
            <div class="cardImg">
                <img src="<?= Categories::catLogo($sub->category) ?>" alt="Category Logo">
            </div>
            <div class="cardText">
                <div class="sub-cardText">
                    <div class="leftCardText">
                        <p class="category"><?= $sub->category ?></p>
                        <h2><?= $sub->label ?></h2>
                        <p class="rates"><?= $sub->rates ?></p>
                        <p class="price"><?= ($sub->price / 100) ?> €</p>
                    </div>
                </div>
                <div class="sub-cardText">
                    <div class="rightCardText">
                        <p>Date de Début</p>
                        <p><?= date("d-m-Y", strtotime($sub->date_payment)) ?></p>
                    </div>
                    <div class="links">
                        <a href="/index.php?action=subUpdated&id=<?= $sub->idSubscription ?>" aria-label="Update page"><i class="fa-regular fa-pen-to-square fa-xl" style="color: #ffffff;"></i></a>
                        <a data-sub='<?= $deleteSub?>' class="modalBtn"><i class="fa-solid fa-trash fa-xl" style="color: #ffffff;"></i></i></a>
                        <!-- href="/index.php?action=subdeleted&id=<?= $sub->idSubscription ?>" -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <p>Etes vous sur de vouloir supprimer <span id="modalSubName"></span> ? </p>
            <div class="modal-link">
            <button aria-label="Accept Delete" id='href'>OUI</button>
            <button aria-label="Refuse Delete"class="close">NON</button>
            </div>
        </div>

    </div>
</div>
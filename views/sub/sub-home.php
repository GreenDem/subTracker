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
    <?php foreach ($subscriptions as $sub) { ?>


        <div class="card">
            <div class="cardImg">
                <img src="/public/assets/img/deezerLogo.jpg" alt="">
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
                        <a href="/index.php?action=subUpdated&id=<?= $sub->idSubscription ?>">Modifier</a>
                        <a href="/index.php?action=subdeleted&id=<?= $sub->idSubscription ?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
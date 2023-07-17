<div class="top">
    <p>Bonjour <?= $users->firstname ?>,</p>
    <p>Ce mois-ci tes abonnements te coutent <?= $cost ?> € (Pro-Rata)</p>
    <p>Tes paiements seront de <?= $payment ?> €</p>
</div>
<?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert alert-success" role="alert">
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
                <div class="leftCardText">
                <p><?= $sub->category ?></p>
                <h2><?= $sub->label ?></h2>
                <p><?= $sub->rates ?></p>
                <p><?= ($sub->price / 100) ?> €</p>
                </div>
                <div class="rightCardText">
                    <p>Date de Début</p>
                <p><?= date("d-m-Y", strtotime($sub->date_payment)) ?></p>
                <div class="links">
                <a href="/index.php?action=subUpdated&id=<?= $sub->idSubscription ?>">Modifier</a>
                <a href="/index.php?action=subdeleted&id=<?= $sub->idSubscription ?>">Supprimer</a>
                </div>
                </div>
            </div>
        </div>

    <?php } ?>

</div>
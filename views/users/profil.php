<div class="div-title">
    <h1 class="form-title capital">PROFIL DE <?= $user->firstname ?></h1>
</div>
<div>
    <div class="profil-detail">
        <div class="profil-delete">
            <a class="modalBtn">Supprimer</a>
        </div>
    <?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert" role="alert">
            <?= SessionFlash::getMessage() ?>
        </div>
    <?php } ?>

        <div class="profil-infos">
            <p> <span> Nom :</span> <?= $user->lastname ?></p>
            <p><span>Prénom : </span><?= $user->firstname ?></p>
            <p><span>Mail :</span> <?= $user->mail ?></p>
            <p><span>Membre depuis le :</span> <?= $user->created_at ?></p>
            <?php if ($user->updated_at != null) { ?>
                <p><span>Derniére modification : </span><?= $user->updated_at ?></p>
            <?php } ?>
        </div>
        <div class="profil-update">
            <a href="/index.php?action=userUpdated">Modifier</a>
            <a href="/index.php?action=userPassword">Changer le MDP</a>
        </div>
    </div>
</div>
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <p>Etes vous sur de vouloir supprimer votre compte ? </p>
    <div class="modal-link">
    <a href="/index.php?action=userDelete">OUI</a>
    <a class="close">NON</a>
    </div>
</div>

</div>

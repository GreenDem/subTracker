<?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert alert-success" role="alert">
            <?= SessionFlash::getMessage() ?>
        </div>
    <?php } ?>

    <a href="/index.php?action=userDelete">Supprimer</a>
<h1>PROFIL</h1>


<div>
    <p>Nom : <?= $user->lastname ?></p>
    <p>Prénom : <?= $user->firstname ?></p>
    <p>Mail : <?= $user->mail ?></p>
    <p>Membre depuis le : <?= $user->created_at ?></p>
    <?php if ($user->updated_at != null) {?>
    <p>Derniére modification : <?= $user->updated_at ?></p>
    <?php } ?>
</div>
<a href="/index.php?action=userUpdated">Modifier</a>
<a href="/index.php?action=userdeleted">Supprimer</a>
<a href="/index.php?action=userPassword">Modifier le mot de passe </a>
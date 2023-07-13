<H1>DASHBOARD USERS</H1>
<div class="container-fluid">
    <?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert alert-success" role="alert">
            <?= SessionFlash::getMessage() ?>
        </div>
    <?php } ?>
    <div class="table-responsive">

    <table class=" table table-striped">



        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">mail</th>
                <th scope="col">Admin</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($users as $user) {
                $deleteFocus = json_encode($user)
            ?>
                <tr>
                    <th scope="row"><?= $user->idUser ?></th>
                    <td><?= $user->lastname ?></td>
                    <td><?= $user->firstname ?></td>
                    <td><?= $user->mail ?></td>
                    <td><?= $user->admin ?></td>
                    <td><?= $user->updated_at ?></td>
                    <td><a href="/../index.php?action=aUpdated&id=<?= $user->idUser ?>"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a class="deleteModal" data-user='<?= $deleteFocus ?>' data-bs-toggle="modal" data-bs-target="#Modal" href="/../index.php?action=aDeleted&id=<?= $user->idUser ?>"><i class="fa-regular fa-trash-can"></i></a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="dataDelete">
                Etes vous sur de vouloir supprimer <span id="modalName"></span> de la base de donnée ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <a id="href" href="" type="button" class="btn btn-primary">Supprimer</a>
            </div>
        </div>
    </div>
</div>
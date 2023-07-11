<H1>DASHBOARD SUBS</H1>
<div class="container-fluid">
    <?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert alert-success" role="alert">
            <?= SessionFlash::getMessage() ?>
        </div>
    <?php } ?>

    <table class="table table-striped col-6">



        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rates</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($rates as $rate) {
                $deleteFocus = json_encode($rate)
            ?>
                <tr>
                    <th scope="row"><?= $rate->idRate ?></th>
                    <td><?= $rate->rates ?></td>
                    <td><a href="/../index.php?action=aUpdated&id=<?= $rate->idRate ?>"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a class="deleteModal" data-rate='<?= $deleteFocus ?>' data-bs-toggle="modal" data-bs-target="#Modal" href="/../index.php?action=aDeleted&id=<?= $rate->idRate ?>"><i class="fa-regular fa-trash-can"></i></a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

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
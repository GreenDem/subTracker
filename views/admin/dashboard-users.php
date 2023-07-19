<div class="div-title">
    <h1 class="form-title">DASHBOARD UTILISATEURS</h1>
</div>
<div class="container-fluid">
    <?php if (SessionFlash::checkMessage()) { ?>
        <div class="alert alert-success" role="alert">
            <?= SessionFlash::getMessage() ?>
        </div>
    <?php } ?>
    <div class="row col-3 m-1">
        <input placeholder="Rechercher" type="text" name="search" id="search" onkeyup="usersearch(this.value, 1)">
    </div>
    <div id='searchresult'>

    </div>
</div>
<div class="pages">

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
                <a id="href" href="" type="button" class="btn btn-primary">OUI</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NON</button>
            </div>
        </div>
    </div>
</div>
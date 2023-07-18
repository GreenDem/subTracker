<div class="div-title">
    <h1 class="form-title">AJOUT DE FREQUENCE</h1>
</div>
<div class="form-block">

    <form method="POST">
        <div>
            <div class="form-div">

                <label for="rate" class="form-label">Nom</label>
                <input type="text" id="rate" name="rate" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['rate'] ?? '' ?></p>
            </div>

        </div>
        <div class="btn-div">
            <button class="btn" type="submit">Ajouter</button>
        </div>
</div>
</form>
</div>
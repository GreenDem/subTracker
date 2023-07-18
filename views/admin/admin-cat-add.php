<div class="div-title">
    <h1 class="form-title">AJOUTER DE CATEGORIE</h1>
</div>
<div class="form-block">

    <form method="POST">

        <div>
            <div class="form-div">

                <label for="category" class="form-label">Nom</label>
                <input type="text" id="category" name="category" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['category'] ?? '' ?></p>
            </div>

        </div>
        <div class="btn-div">
            <button class="btn" type="submit">Ajouter</button>
        </div>
        </fieldset>
    </form>
</div>
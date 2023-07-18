<div class="div-title">
<h1 class="form-title">MODIFACTION DE CATEGORIE</h1>
</div>
<div class="form-block">

    <form method="POST">
            <div>
            <div class="form-div">

                <label for="category" class="form-label">Nom</label>
                <input value="<?= $cat->category ?>" type="text" class="" id="category" name="category" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['category'] ?? '' ?></p>
               

                </div>
            </div>
            <div class="btn-div">
                <button class="btn" type="submit">Modifier</button>
            </div>
    </form>
</div>


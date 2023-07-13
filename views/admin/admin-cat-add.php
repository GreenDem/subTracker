<h1>UPDATED Category</h1>

<div class="form-up-container">

    <form method="POST">

        <fieldset class="fieldset-up">
            <legend>Categorie</legend>
            <div class="form-up-inner">


                <label for="category" class="form-label">Nom</label>
                <input type="text" id="category" name="category" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['category'] ?? '' ?></p>
                <br>


            </div>
            <div class="btn-up-container">
                <button class="btn-up" type="submit">Ajouter</button>
            </div>
        </fieldset>
    </form>
</div>


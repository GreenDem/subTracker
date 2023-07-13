<h1>UPDATED Fréquence</h1>

<div class="form-up-container">

    <form method="POST">

        <fieldset class="fieldset-up">
            <legend>Fréquence</legend>
            <div class="form-up-inner">


                <label for="rate" class="form-label">Nom</label>
                <input value="<?= $rate->rates ?>" type="text" class="" id="rate" name="rate" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['rate'] ?? '' ?></p>
                <br>


            </div>
            <div class="btn-up-container">
                <button class="btn-up" type="submit">Modifier</button>
            </div>
        </fieldset>
    </form>
</div>


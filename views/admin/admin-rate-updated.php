<div class="div-title">
    <h1 class="form-title">MODIFICATION DE FREQUENCE</h1>
</div>
<div class="form-block">

    <form method="POST">

        <div>

            <div class="form-div">

                <label for="rate" class="form-label">Nom</label>
                <input value="<?= $rate->rates ?>" type="text" class="" id="rate" name="rate" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['rate'] ?? '' ?></p>
            </div>

        </div>
        <div class="btn-div">
            <button class="btn" type="submit">Modifier</button>
        </div>
        </fieldset>
    </form>
</div>
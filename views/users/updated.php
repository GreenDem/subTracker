<div class="form-up-container">

<form method="POST">

    <fieldset class="fieldset-up">
        <legend>Modifier</legend>
        <div class="form-up-inner">

                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="" id="lastname" name="lastname" pattern=<?= LASTNAME ?> value="<?= $user->lastname ?>" required>
                <p class="red"><?= $error['lastname'] ?? '' ?></p>
                <br>

                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="" id="firstname" name="firstname" value="<?= $user->firstname ?>" required>
                <p class="red"><?= $error['firstname'] ?? '' ?></p>
                

        </div>
        <div class="btn-up-container">
        <button class="btn-up" type="submit">Modifier</button>
        </div>
    </fieldset>
</form>
</div>
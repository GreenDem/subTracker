<h1>UPDATED</h1>

<div class="form-up-container">

    <form method="POST">

        <fieldset class="fieldset-up">
            <legend>Modifier</legend>
            <div class="form-up-inner">


                <label for="lastname" class="form-label">Nom</label>
                <input value="<?= $user->lastname ?>" type="text" class="" id="lastname" name="lastname" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['lastname'] ?? '' ?></p>
                <br>

                <label for="firstname" class="form-label">Prénom</label>
                <input value="<?= $user->firstname ?>" type="text" class="" id="firstname" name="firstname" required>
                <p class="red"><?= $error['firstname'] ?? '' ?></p>
                <br>

                <?php $isAdmin = ($user->admin == 1) ? 'checked' : '' ?>
                <label for="admin">Admin</label>
                <input type="checkbox" id="admin" name="admin" value="1" <?= $isAdmin ?>>


            </div>
            <div class="btn-up-container">
                <button class="btn-up" type="submit">Modifier</button>
            </div>
        </fieldset>
    </form>
</div>
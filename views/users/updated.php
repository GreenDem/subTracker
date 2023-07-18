<div class="div-title">
    <h1 class="form-title">INSCRIPTION</h1>
</div>
<div class="form-block">
    <form method="POST">

        <div>
            <div class="form-div">

                <label for="lastname" class="form-label">Nom</label>
                <input type="text" id="lastname" name="lastname" pattern=<?= LASTNAME ?> value="<?= $user->lastname ?>" required>
                <p class="red"><?= $error['lastname'] ?? '' ?></p>
            </div>
            <div class="form-div">

                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" id="firstname" name="firstname" value="<?= $user->firstname ?>" required>
                <p class="red"><?= $error['firstname'] ?? '' ?></p>
            </div>


        </div>
        <div class="btn-up-container">
            <button class="btn-up" type="submit">Modifier</button>
        </div>
    </form>
</div>
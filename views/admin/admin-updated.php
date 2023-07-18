<div class="div-title">
<h1 class="form-title">MODIFIER UN UTILSATEUR</h1>
</div>
<div class="form-block">

    <form method="POST">

            <div>

            <div class="form-div">

                <label for="lastname" class="form-label">Nom</label>
                <input value="<?= $user->lastname ?>" type="text" class="" id="lastname" name="lastname" pattern=<?= LASTNAME ?> required>
                <p class="red"><?= $error['lastname'] ?? '' ?></p>
                </div> <div class="form-div">

                <label for="firstname" class="form-label">Prénom</label>
                <input value="<?= $user->firstname ?>" type="text" class="" id="firstname" name="firstname" required>
                <p class="red"><?= $error['firstname'] ?? '' ?></p>
                </div> <div class="form-div">

                <?php $isAdmin = ($user->admin == 1) ? 'checked' : '' ?>
                <label for="admin">Admin</label>
                <input type="checkbox" id="admin" name="admin" value="1" <?= $isAdmin ?>>
                </div> 

            </div>
            <div class="btn-div">
                <button class="btn" type="submit">Modifier</button>
            </div>
    </form>
</div>
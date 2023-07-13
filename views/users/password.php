<div class="form-up-container">

<form method="POST">

    <fieldset class="fieldset-up">
        <legend>Mofication du MDP</legend>
        <div class="form-up-inner">

                <label for="oldPassword" class="">Ancien mot de passe</label>
                <input type="password" class="" id="oldPassword" name="oldPassword" required minlength="8">
                <!-- //mi lenght 8 -->
                <p class="red"><?= $error['password'] ?? "" ?></p>
                <br>


                <label for="password" class="">Nouveau mot de passe </label>
                <input type="password" class="" id="password" name="password" required minlength="8">
                <!-- //mi lenght 8 -->
                <p class="red"><?= $error['password'] ?? "" ?></p>
                <br>

                <label for="passwordCtr" class="">Confirmation</label>
                <input type="password" class="" id="passwordCtr" required name="passwordCtr" minlength="8">
                <p class="red"><?= $error['password'] ?? "" ?></p>
                <br>


        </div>
        <div class="btn-up-container">
        <button class="btn-up" type="submit">Inscription</button>
        </div>
    </fieldset>
</form>
</div>
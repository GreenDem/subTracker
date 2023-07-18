<div class="div-title">
    <h1 class="form-title">MODIFICATION DU MOT DE PASSE</h1>
</div>
<div class="form-block">
    <form method="POST">

        <div>
            <div class="form-div">

                <label for="oldPassword">Ancien mot de passe</label>
                <input type="password" id="oldPassword" name="oldPassword" required minlength="8">
                <!-- //mi lenght 8 -->
                <p class="red"><?= $error['password'] ?? "" ?></p>
            </div>
            <div class="form-div">

                <label for="password">Nouveau mot de passe </label>
                <input type="password" id="password" name="password" required minlength="8">
                <!-- //mi lenght 8 -->
                <p class="red"><?= $error['password'] ?? "" ?></p>
            </div>
            <div class="form-div">

                <label for="passwordCtr">Confirmation</label>
                <input type="password" id="passwordCtr" required name="passwordCtr" minlength="8">
                <p class="red"><?= $error['password'] ?? "" ?></p>
            </div>

        </div>
        <div class="btn-div">
            <button class="btn" type="submit">Modifier</button>
        </div>
    </form>
</div>
<div class="form-in-container">
    <form method="post" class="fieldset-in">
        <fieldset>
            <legend> Connexion </legend>
            <div class="inner-fieldset-in">
                <label for="mail" class="form-label">Email address</label>
                <input type="email" class="" id="email" name="mail" required>
                <p class="red"><?= $error['mail'] ?? "" ?></p>
                <br>
                <label for="password" class="">Password</label>
                <input type="password" class="" id="password" name="password" required minlength="8">
                <!-- //mi lenght 8 -->
                <p class="red"><?= $error['password'] ?? "" ?></p>
                <div>
                    <input type="checkbox" id="cookie" name="cookie" value="1" checked>
                    <label for="cookie">Rester connecté</label>
                </div>
            </div>
            <button class="btn-in" type="submit">Connexion</button>
        </fieldset>
    </form>
</div>
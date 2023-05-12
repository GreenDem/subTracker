
<div class="form-in-container">
<form method="post"  class="fieldset-in">
    <fieldset  >
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
        </div>
        <button class="btn-in" type="submit">Connexion</button>
    </fieldset>
</form>
</div>
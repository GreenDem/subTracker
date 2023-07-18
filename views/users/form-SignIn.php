<div class="div-title">
    <h1 class="form-title">CONNEXION</h1>
</div>
<div class="form-block">
    <form method="post">
        <div>
        <div class="form-div">
            <label for="mail">Email address</label>
            <input type="email" id="email" name="mail" required>
            <p class="red"><?= $error['mail'] ?? "" ?></p>
            </div><div class="form-div">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required minlength="8">
            <!-- //mi lenght 8 -->
            <p class="red"><?= $error['password'] ?? "" ?></p>
            </div>

            <div>
                <input type="checkbox" id="cookie" name="cookie" value="1" checked>
                <label for="cookie">Rester connecté</label>
            </div>
        </div>
        <div class="btn-div">
            <button class="btn" type="submit">Connexion</button>
        </div>

    </form>
</div>
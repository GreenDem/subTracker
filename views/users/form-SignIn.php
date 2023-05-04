<form method="post">

<div class="">
            <label for="mail" class="form-label">Email address</label>
            <input type="email" class="" id="email" name="mail" required>
            <p class="red"><?= $error['mail'] ?? "" ?></p>
        </div>

        <div class="">
            <label for="password" class="">Password</label>
            <input type="password" class="" id="password" name="password" required minlength="8">
            <!-- //mi lenght 8 -->
            <p class="red"><?= $error['password'] ?? "" ?></p>
        </div>

</form>
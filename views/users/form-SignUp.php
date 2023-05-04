    <form method="POST">

    

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
        <div class="">
            <label for="passwordCtr" class="">Confirmation du Password</label>
            <input type="password" class="" id="passwordCtr" required name="Ctr">
            <p class="red"><?= $error['password'] ?? "" ?></p>
        </div>
        <div class="">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" class="" id="firstName" name="lastName" pattern=<?= $regex['lastName'] ?> required>
            <p class="red"><?= $error['firstName'] ?? '' ?></p>
        </div>
        <div class="">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" class="" id="lastName" name="lastName" pattern=<?= $regex['lastName'] ?> required>
            <p class="red"><?= $error['lastName'] ?? '' ?></p>
        </div>

    </form>
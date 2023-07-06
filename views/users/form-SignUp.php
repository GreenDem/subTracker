    <div class="form-up-container">

        <form method="POST">

            <fieldset class="fieldset-up">
                <legend>Inscription</legend>
                <div class="form-up-inner">
                        <label for="mail" class="form-label">Email address</label>
                        <input type="email" class="" id="mail" name="mail" required>
                        <p class="red"><?= $error['mail'] ?? "" ?></p>
                        <br>

                        <label for="password" class="">Password</label>
                        <input type="password" class="" id="password" name="password" required minlength="8">
                        <!-- //mi lenght 8 -->
                        <p class="red"><?= $error['password'] ?? "" ?></p>
                        <br>

                        <label for="passwordCtr" class="">Confirmation</label>
                        <input type="password" class="" id="passwordCtr" required name="passwordCtr" minlength="8">
                        <p class="red"><?= $error['password'] ?? "" ?></p>
                        <br>

                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" class="" id="lastname" name="lastname" pattern=<?= $regex['lastName'] ?> required>
                        <p class="red"><?= $error['lastname'] ?? '' ?></p>
                        <br>

                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="" id="firstname" name="firstname" required>
                        <p class="red"><?= $error['firstname'] ?? '' ?></p>
                        

                </div>
                <div class="btn-up-container">
                <button class="btn-up" type="submit">Inscription</button>
                </div>
            </fieldset>
        </form>
    </div>
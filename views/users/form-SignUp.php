<div class="div-title">
<h1 class="form-title">INSCRIPTION</h1>
</div>
<div class="form-block">
    <form method="POST">
            <div >
                <div class="form-div">
                    <label for="mail" >Adresse Mail</label>
                    <input  type="email" id="mail" name="mail" required>
                    <p class="red"><?= $error['mail'] ?? "" ?></p>
                </div>

                <div class="form-div">
                <label for="lastname" >Nom</label>
                    <input type="text"  id="lastname" name="lastname" pattern=<?= LASTNAME ?> required>
                    <p class="red"><?= $error['lastname'] ?? '' ?></p>
                </div>
                <div class="form-div">

                    <label for="firstname" >Prénom</label>
                    <input type="text"  id="firstname" name="firstname" required>
                    <p class="red"><?= $error['firstname'] ?? '' ?></p>
                </div>

                <div class="form-div">
                    <label for="password" >Mot de passe</label>
                    <input type="password"  id="password" name="password" required minlength="8">
                    <!-- //mi lenght 8 -->
                    <p class="red"><?= $error['password'] ?? "" ?></p>
                </div>

                <div class="form-div">
                    <label for="passwordCtr" >Confirmation du mot de passe</label>
                    <input type="password"  id="passwordCtr" required name="passwordCtr" minlength="8">
                    <p class="red"><?= $error['password'] ?? "" ?></p>
                </div>
                
            </div>
            <div class="btn-div">
                <button class="btn" type="submit">Inscription</button>
            </div>
        </form>
    </div>
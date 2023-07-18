<div class="div-title">
    <h1 class="form-title">MODIFIER L'ABONNEMENT</h1>
</div>
<div class="form-block">

    <form method="post">

        <div>
            <div class="form-div">
                <label for="label">Titre</label>
                <input type="text" name="label" id="label" maxlength="50" value="<?= $subscriptions->label ?>" required>
                <p class="red"><?= $error["label"] ?? "" ?></p><br>
                <!-- Link un avatar a une catégorie Pour l affichage -->
            </div>
            <div class="form-div">



                <label for="category">Catégorie</label>
                <select name="category" id="category" required>
                    <?php
                    foreach ($categories as $category) { ?>
                        <?php $isSelected = ($category->idCategory == $label->idCategory) ? "selected" : "" ?>
                        <option value="<?= $category->idCategory ?>" <?= $isSelected ?>><?= $category->category ?></option>
                    <?php } ?>
                </select>
                <p class="red"><?= $error["category"] ?? "" ?></p><br>

            </div>
            <div class="form-div">

                <label for="date_payment">Date de l'échéance</label>
                <input type="date" name="date_payment" id="date_payment" value="<?= $subscriptions->date_payment ?>" required>
                <p class="red"><?= $error["date_payment"] ?? "" ?></p><br>

            </div>
            <div class="form-div">

                <label for="rates">Fréquence de Paiement</label>
                <select name="rates" id="rates" required>
                    <?php
                    foreach ($rates as $rate) {
                        $isSelected = ($rate->idRate == $subscriptions->idRate) ? "selected" : "" ?>

                        <option value="<?= $rate->idRate ?>" <?= $isSelected ?>><?= $rate->rates ?></option>
                    <?php } ?>
                </select>
                <p class="red"><?= $error["rates"] ?? "" ?></p> <br>

            </div>
            <div class="form-div">

                <label for="price">Tarif</label>
                <input type="number" name="price" id="price" step="0.01" value="<?= ($subscriptions->price / 100) ?>" required>
                <p class="red"><?= $error["price"] ?? "" ?>
            </div>


            <div class="btn-div">
                <button class="btn" type="submit">MODIFIER</button>
            </div>
            </fieldset>
    </form>
</div>
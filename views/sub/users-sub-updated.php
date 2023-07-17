<div class="sub-add-container">
    <form method="post">

        <fieldset class="fieldset-add">

            <legend>Ajouter un abonnement</legend>
            <div class="form-add-inner">
                <label for="label">Titre</label>
                <input type="text" name="label" id="label" maxlength="50" value="<?= $subscriptions->label ?>" required>
                <p><?= $error["label"] ?? "" ?></p><br>
                <!-- Link un avatar a une catégorie Pour l affichage -->


                <label for="category">Catégorie</label>
                <select name="category" id="category" required>
                    <?php
                    foreach ($categories as $category) { ?>
                        <?php $isSelected = ($category->idCategory == $label->idCategory) ? "selected" : "" ?>
                        <option value="<?= $category->idCategory ?>" <?= $isSelected ?>><?= $category->category ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["category"] ?? "" ?></p><br>


                <label for="date_payment">Date de l'échéance</label>
                <input type="date" name="date_payment" id="date_payment" value="<?= $subscriptions->date_payment ?>" required>
                <p><?= $error["date_payment"] ?? "" ?></p><br>


                <label for="rates">Fréquence de Paiement</label>
                <select name="rates" id="rates" required>
                    <?php
                    foreach ($rates as $rate) {
                        $isSelected = ($rate->idRate == $subscriptions->idRate) ? "selected" : "" ?>

                        <option value="<?= $rate->idRate ?>" <?= $isSelected ?>><?= $rate->rates ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["rates"] ?? "" ?></p> <br>


                <label for="price">Tarif</label>
                <input type="number" name="price" id="price" step="0.01" value="<?= ($subscriptions->price / 100) ?>" required>
                <p><?= $error["price"] ?? "" ?>


                <div class="btn-add">
                    <button type="submit">MODIFIER</button>
                </div>
        </fieldset>
    </form>
</div>
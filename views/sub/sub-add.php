
<div class="sub-add-container">
    <form method="post">

        <fieldset class="fieldset-add">

            <legend>Ajouter un abonnement</legend>
            <div class="form-add-inner">
                <label for="label">Titre</label>
                <input type="text" name="label" id="label" maxlength="50" required>
                <p><?= $error["label"] ?? "" ?></p><br>
                <!-- Link un avatar a une catégorie Pour l affichage -->


                <label for="category">Catégorie</label>
                <select name="category" id="category" required>
                    <?php
                    foreach ($categories as $category) { ?>
                        <option value="<?=$category->idCategory ?>"><?= $category->category ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["category"] ?? "" ?></p><br>

                <!-- Au moins 1 obligatoire entre le start et le due définir varaible 
                                si une seul, sinon choisirs due date pour les calculs isset ||-->

                <!-- <label for="date_start">Date de Début</label>
                <input type="date" name="date_start" id="date_start" min='2010-01-01' > -->

                <label for="date_payment">Date de l'échéance</label>
                <input type="date" name="date_payment" id="date_payment" required>
                <p><?= $error["date_payment"] ?? "" ?></p><br>


                <!-- <label for="date_end">Date de fin</label>
                <input type="date" name="date_end" id="date_end"> -->


                <label for="rates">Fréquence de Paiement</label>
                <select name="rates" id="rates" required>
                    <?php
                    foreach ($rates as $rate) { ?>
                        <option value="<?= $rate->idRate ?>"><?= $rate->rates ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["rates"] ?? "" ?></p> <br>


                <label for="price">Prix</label>
                <input type="number" name="price" id="price" step="0.01" required>
                <p><?= $error["price"] ?? "" ?>


                <div class="btn-add">
                    <button type="submit">AJOUTER</button>
                </div>
            </fieldset>
        </form>
</div>

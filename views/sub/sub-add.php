<?php require_once __DIR__ . '/../../config/init.php' ?>

<div class="sub-add-container">
    <form method="post">

        <fieldset class="fieldset-add">

            <legend>Ajouter un abonnement</legend>
            <div class="form-add-inner">
                <label for="subTitile">Titre</label>
                <input type="text" name="subTitile" id="subTitile" maxlength="56" required>
                <p><?= $error["subDateStart"] ?? "" ?></p><br>
                <!-- Link un avatar a une catégorie Pour l affichage -->


                <label for="category">Catégorie</label>
                <select name="category" id="category" required>
                    <?php
                    foreach (CATEGORY as $key => $value) { ?>
                        <option><?= $value ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["category"] ?? "" ?></p><br>

                <!-- Au moins 1 obligatoire entre le start et le due définir varaible 
                                si une seul, sinon choisirs due date pour les calculs isset ||-->

                <label for="subDateStart">Date de Début</label>
                <input type="date" name="subDateStart" id="subDateStart">

                <label for="subDateDue">Date de l'échéance</label>
                <input type="date" name="subDateDue" id="subDateDue" required>
                <p><?= $error["subDateDue"] ?? "" ?></p><br>


                <label for="subDateEnd">Date de fin</label>
                <input type="date" name="subDateEnd" id="subDateEnd">
                <label for="rate">Fréquence de Paiement</label>
                <select name="rate" id="rate" required>
                    <?php
                    foreach (RATE as $key => $value) { ?>
                        <option><?= $value ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["rate"] ?? "" ?></p> <br>


                <label for="tariff">Tarif</label>
                <input type="number" name="tariff" id="tariff" required>
                <p><?= $error["tariff"] ?? "" ?>


                <div class="btn-add">
                    <button type="submit">AJOUTER</button>
                </div>
            </fieldset>
        </form>
</div>

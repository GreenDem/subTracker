<?php require_once __DIR__ . '/../../config/init.php' ?>

<form method="post">


    <div>
        <label for="subTitile">Titre</label>
        <input type="text" name="subTitile" id="subTitile" maxlength="56" required>
        <p><?= $error["subDateStart"] ?? "" ?></p>
    </div>
            <!-- Link un avatar a une catégorie Pour l affichage -->
    <div>
    <label for="category">Veuillez Choisir la Catégorie</label>
    <select name="category" id="category" required>
        <?php
        foreach (CATEGORY as $key => $value) { ?>
            <option><?= $value ?></option>
        <?php } ?>
    </select>
    <p><?= $error["category"] ?? "" ?></p>

    </div>
    <!-- Au moins 1 obligatoire entre le start et le due définir varaible 
                                si une seul, sinon choisirs due date pour les calculs isset ||-->

    <div>
        <div>
            <label for="subDateStart">Date de Début</label>
            <input type="date" name="subDateStart" id="subDateStart">
        </div>
        <div>

            <label for="subDateDue">Date de l'échéance</label>
            <input type="date" name="subDateDue" id="subDateDue" required>
            <p><?= $error["subDateDue"] ?? ""?></p>
        </div>
        <div>
            <label for="subDateEnd">Date de fin</label>
            <input type="date" name="subDateEnd" id="subDateEnd">
        </div>
    </div>
    <div>
        <label for="rate">Veuillez Choisir la Fréquence de Paiement</label>
        <select name="rate" id="rate" required>
            <?php
            foreach (RATE as $key => $value) { ?>
                <option><?= $value ?></option>
            <?php } ?>
        </select>
        <p><?= $error["rate"] ?? "" ?></p>

    </div>
    <label for="tariff">Tarif</label>
    <input type="number" name="tariff" id="tariff" required>
    <p><?= $error["tariff"] ?? "" ?></p>

    <div><br>
        <button type="submit">AJOUTER</button>
    </div>
</form>
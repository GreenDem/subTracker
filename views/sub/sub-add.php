
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
                    foreach (CATEGORY as $key => $value) { ?>
                        <option><?= $value ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["category"] ?? "" ?></p><br>

                <!-- Au moins 1 obligatoire entre le start et le due définir varaible 
                                si une seul, sinon choisirs due date pour les calculs isset ||-->

                <label for="date_start">Date de Début</label>
                <input type="date" name="date_start" id="date_start">

                <label for="date_payment">Date de l'échéance</label>
                <input type="date" name="date_payment" id="date_payment" required>
                <p><?= $error["date_payment"] ?? "" ?></p><br>


                <label for="date_end">Date de fin</label>
                <input type="date" name="date_end" id="date_end">
                <label for="rates">Fréquence de Paiement</label>
                <select name="rates" id="rates" required>
                    <?php
                    foreach (RATE as $key => $value) { ?>
                        <option><?= $value ?></option>
                    <?php } ?>
                </select>
                <p><?= $error["rates"] ?? "" ?></p> <br>


                <label for="price">Tarif</label>
                <input type="number" name="price" id="price" required>
                <p><?= $error["price"] ?? "" ?>


                <div class="btn-add">
                    <button type="submit">AJOUTER</button>
                </div>
            </fieldset>
        </form>
</div>

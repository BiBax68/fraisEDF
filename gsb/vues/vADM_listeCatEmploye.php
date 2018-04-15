<div class="contenu">
    <div class="contenu_interne">
        <h2>Catégorie "Type employé" :</h2>
        <a href="index.php?uc=gererCatEmploye&action=ajouterCatEmploye"><button type="button" value="Nouveau" name="btn_ajouter">Nouveau</button></a>
        <table class="listeLegere">
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th><img src="images/icon_edit.png"></th>
                <th><img src="images/icon_delete.png"></th>
            </tr>
            <?php
            foreach ($lesCatEmploye as $catEmploye) {
                $id = $catEmploye['idTypeEmploye'];
                $libelle = $catEmploye['libelleTypeEmploye'];
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $libelle; ?></td>
                    <td>
                        <form method="POST" action="index.php?uc=gererCatEmploye&action=modifierCatEmploye">
                            <input type="hidden" value="<?php echo $id; ?>" name="idCatEmploye" id="idCatEmploye" readonly>
                            <button type="submit" value="Modifier" name="btn_modifier">Modifier</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php?uc=gererCatEmploye&action=validerSuppressionCatEmploye">
                            <input type="hidden" value="<?php echo $id; ?>" name="idCatEmploye" id="idCatEmploye" readonly>
                            <button type="submit" value="Supprimer" name="btn_supprimer" onclick="return(confirm('Confirmer la suppression'));">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
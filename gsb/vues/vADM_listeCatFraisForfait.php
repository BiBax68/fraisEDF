<div class="contenu">
    <div class="contenu_interne">
        <h2>Catégorie "Frais forfaitisé" :</h2>
        <a href="index.php?uc=gererCatFraisForfait&action=ajouterCatFraisForfait"><button type="button" value="Nouveau" name="btn_ajouter">Nouveau</button></a>
        <table class="listeLegere">
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Montant</th>
                <th><img src="images/icon_edit.png"></th>
                <th><img src="images/icon_delete.png"></th>
            </tr>
            <?php
            foreach ($lesCatFraisForfait as $catFraisForfait) {
                $id = $catFraisForfait['idFraisForfaitise'];
                $libelle = $catFraisForfait['libelleFF'];
                $montant = $catFraisForfait['montantFF'];
            ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $libelle; ?></td>
                        <td><?php echo $montant; ?></td>
                        <td>
                            <form method="POST" action="index.php?uc=gererCatFraisForfait&action=modifierCatFraisForfait">
                                <input type="hidden" value="<?php echo $id; ?>" name="idCatFraisForfait" id="idCatFraisForfait" readonly>
                                <button type="submit" value="Modifier" name="btn_modifier">Modifier</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="index.php?uc=gererCatFraisForfait&action=validerSuppressionCatFraisForfait">
                                <input type="hidden" value="<?php echo $id; ?>" name="idCatFraisForfait" id="idCatFraisForfait" readonly>
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
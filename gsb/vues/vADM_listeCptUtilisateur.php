<div class="contenu">
    <div class="contenu_interne">
        <h2>Comptes utilisateur :</h2>
        <a href="index.php?uc=gererCptUtilisateur&action=ajouterCptUtilisateur"><button type="button" value="Nouveau" name="btn_ajouter">Nouveau</button></a>
        <table class="listeLegere">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Login</th>
                <th>Adresse</th>
                <th>Date d'embauche</th>
                <th>Type véhicule</th>
                <th>Type employé</th>
                <th>Etat compte</th>
                <th>Date dernière MAJ fiche</th>
                <th><img src="images/icon_edit.png"></th>
                <th><img src="images/icon_delete.png"></th>
            </tr>
            <?php
            foreach ($lesCptUtilisateur as $cptUtilisateur) {
                $id         = $cptUtilisateur['idEmploye'];
                $nom        = $cptUtilisateur['nom'];
                $prenom     = $cptUtilisateur['prenom'];
                $login      = $cptUtilisateur['login'];
                $adresse    = $cptUtilisateur['adresse'];
                $cp         = $cptUtilisateur['codePostal'];
                $ville      = $cptUtilisateur['libelleVille'];
                $dateEmbauche        = $cptUtilisateur['dateEmbauche'];
                $libelleTypeVehicule = $cptUtilisateur['libelleTypeVehicule'];
                $typeEmployeId       = $cptUtilisateur['idTypeEmploye'];
                $typeEmployeLibelle  = $cptUtilisateur['libelleTypeEmploye'];
                $dateDerniereModif   = $cptUtilisateur['dateModifFicheE'];
                ($cptUtilisateur['cptActif'] == 1) ? $etatCpt = "Actif" : $etatCpt = "Inactif";
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $prenom; ?></td>
                    <td><?php echo $login; ?></td>
                    <td><?php echo $adresse . " " . $cp . " " . $ville; ?></td>
                    <td><?php echo $dateEmbauche; ?></td>
                    <td><?php echo $libelleTypeVehicule; ?></td>
                    <td><?php echo $typeEmployeId . " - " . $typeEmployeLibelle; ?></td>
                    <td><?php echo $etatCpt; ?></td>
                    <td><?php echo $dateDerniereModif; ?></td>
                    <td>
                        <form method="POST" action="index.php?uc=gererCptUtilisateur&action=modifierCptUtilisateur">
                            <input type="hidden" value="<?php echo $id; ?>" name="idUser" id="idUser" readonly>
                            <button type="submit" value="Modifier" name="btn_modifier">Modifier</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php?uc=gererCptUtilisateur&action=validerSuppressionCptUtilisateur">
                            <input type="hidden" value="<?php echo $id; ?>" name="idUser" id="idUser" readonly>
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
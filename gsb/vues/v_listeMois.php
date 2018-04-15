<?php
$uc = $_GET['uc'];
if ($typeEmploye == "VIS"){
    $ucRenvoi = "etatFrais";
    $actionRenvoi = "voirEtatFrais";
}
elseif ($typeEmploye == "COM"){
    $ucRenvoi = "controlerFrais";
    if ($uc == "suivreFrais"){
        $ucRenvoi = "suivreFrais";
    }
    $actionRenvoi = "voirFicheFrais";
}
?>

<div class="contenu contenu_first">
    <?php
    if ($typeEmploye == "VIS"){
    ?>
        <h2>Consulter les fiches de frais mensuelles</h2>
    <?php
    }
    ?>
    <div class="contenu_interne">
        <?php
        if (!empty($lesMois)){
        ?>
            <form method="POST" action="index.php?uc=<?php echo $ucRenvoi; ?>&action=<?php echo $actionRenvoi; ?>">
                <fieldset>
                    <legend>Sélectionnez un mois : </legend>
                    <div class="corpsForm">
                            <?php
                            if (isset($leVisiteur)){
                            ?>
                                <input type="hidden" value="<?php echo $leVisiteur;?>" id="idVisiteur" name="idVisiteur" readonly>
                            <?php
                            }
                            ?>
                            <label for="lstMois" accesskey="n">Mois : </label>
                            <select id="lstMois" name="lstMois">
                            <?php
                            foreach ($lesMois as $unMois){
                                $mois = $unMois['mois'];
                                $num_annee =  $unMois['numAnnee'];
                                $num_mois =  $unMois['numMois'];
                                if($mois == $_POST['lstMois'] || $mois == $leMois){ ?>
                                    <option selected value="<?php echo $mois; ?>"><?php echo  $num_mois."/".$num_annee; ?> </option>
                                <?php
                                }
                                else{ ?>
                                    <option value="<?php echo $mois; ?>"><?php echo  $num_mois."/".$num_annee; ?> </option>
                                <?php
                                }
                            } ?>
                            </select>
                    </div>
                    <div class="piedForm">
                        <input id="ok" type="submit" value="Valider" size="20" />
                        <input id="annuler" type="reset" value="Effacer" size="20" />
                    </div>
                </fieldset>
            </form>
        <?php
        }
        else {
            echo "Aucune fiche de frais.";
        }
        ?>
    </div>
</div>
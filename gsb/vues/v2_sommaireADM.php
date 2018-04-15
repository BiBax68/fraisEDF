<!-- Division pour le sommaire -->
<div id="menuGauche">
    <div id="infosUtil">
        <h1>ESPACE Administrateur</h1>
    </div>
    <ul id="menuList">
        <li class="nomEmploye">
            Administrateur : <?php echo $_SESSION['prenom']."  ".$_SESSION['nom'];?>
        </li>
        <li class="smenu">
            <a href="index.php?uc=gererCatEmploye&action=voirCatEmploye" title="Gérer catégorie type employé (ajout, modif, suppression)">Superviser la catégorie "Type employé"</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=gererCatFraisKm&action=voirCatFraisKm" title="Gérer catégorie type véhicule (ajout, modif, suppression)">Superviser la catégorie "Type véhicule"</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=gererCatFraisForfait&action=voirCatFraisForfait" title="Gérer catégorie catégorie frais forfaitisé (ajout, modif, suppression)">Superviser la catégorie "Frais forfaitisé"</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=gererCptUtilisateur&action=voirCptUtilisateur" title="Gérer les comptes utilisateur GSB (ajout, modif, suppression)">Superviser les comptes utilisateur</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>
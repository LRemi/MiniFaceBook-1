<?php
$titre="Login";
?>

<style>
    footer {
        position: absolute !important;
    }
</style>



<?php $__env->startSection('content'); ?>

    <div class="login-contenu">
        <div class="login-filtre_fond"></div>

        <div class="login-logo">
            <h1><span class="logo_kinbook">K<span class="logo_kinbook_rouge">indbook</span></span></h1>
            <span>Rejoignez vos amis mangeur de Kinder !</span>
        </div>

        <div class="login-form">
            <form class="login-form_connexion" action="index.php?action=connexion" method="POST">
                <label for="login">Identifiant</label>
                <input class="zone_txt" type="text" name="login" id="login" required>

                <label for="mdp">Mot de passe</label>
                <input class="zone_txt" type="password" name="mdp" id="mdp" required>

                <div class="resterco">
                    <label for="resterco">Rester connecté</label>
                    <input class="zone_txt" type="checkbox" name="resterco" id='resterco' value=1>
                </div>

                <div> <input class="bouton" type="submit" name="envoyer" id="bouton-envoyer" value="Connexion"> </div>
                
            </form>

            <span>OU</span>

            <div> <a class="bouton" href="index.php?action=signin">Rejoindre l'équipe chocolatée</a> </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.log', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
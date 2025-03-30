<?php include   '../inc/head.inc.php' ?>
<?php include   '../inc/header.inc.php' ?>
<main class="centrage boxOmbre">
    <h1>Connexion</h1>
    <?php
    afficherAlerte($message, 'danger'); ?>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off">
        <label for="username"> Nom d'utilisateur: </label><input type="text" id="username" name="username" value="<?= $username ?>">
        <label for="password"> Mot de passe: </label><input type="password" id="password" name="password" value="<?= $password ?>">
        <input class="btn btn-theme" type="submit" name="buttLogin" value="Se connecter">
    </form>

</main>

<?php include  '../inc/footer.inc.php' ?>
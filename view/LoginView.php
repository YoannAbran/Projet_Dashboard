<?php  ob_start() ?>
<form class="box" action="<?php  htmlspecialchars('index.php?action=login')?>" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<div class="m-4">

<input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur" required>
<input type="password" class="box-input" name="password" placeholder="Mot de passe" required>
<input type="submit" value="Connexion " name="submit" class="box-button">
</div>
<?php
$content = ob_get_clean();
 require('template.php');

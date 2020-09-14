<?php ob_start();
session_start();
session_regenerate_id();?>

<form class="box" action="<?php htmlspecialchars('index.php?action=register')?>" method="post">
    <h1 class="box-title">Ajouter un admin</h1>
    <div class="m-4">

  <input type="text" class="box-input" name="nom" placeholder="Nom d'utilisateur" required />
    <input type="email" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

    <input type="submit" name="submit" value="S'inscrire" class="box-button" />

  </div>
  <?php
  $content = ob_get_clean();
   require('template.php');

<?php ob_start(); ?>

<form class="box" action="<?php htmlspecialchars('index.php?action=register')?>" method="post">
    <h1 class="box-title">S'inscrire</h1>
    <div class="m-4">

  <input type="text" class="box-input" name="nom" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

    <input type="submit" name="submit" value="S'inscrire" class="box-button" />

  </div>
  <?php
  $content = ob_get_clean();
   require('template.php');
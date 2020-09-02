<?php
  ob_start();
?>
<div class="">
  <h1>Home</h1>
</div>

<?php
$content = ob_get_clean();
 require('template.php');

<?php
// NOOIT AAN ZITTEN
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Laat deze pagina niet zien DANKU!');

  if (post_password_required()  ) { ?>
    <p class="nocomments">Deze post is beschermd met een wachtwoord!</p>
  <?php
    return;
    }
  ?>
  

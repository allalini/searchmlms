<?php require_once('../private/initalize.php');


$mlms = Mlm::find_all();
// var_dump($mlms);

foreach($mlms as $mlm) { ?>
       
     <?= h($mlm->mlm_id); ?>
     <?= h($mlm->mlm_name); ?>
     <?= h($mlm->is_mlm); ?>

      <?php } ?>


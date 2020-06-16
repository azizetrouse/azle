<?php

include 'data/db.php';
?>
<article>
   <?php for($i=0;$i<count($data['pages']); $i++){ ?>
    <div class="box">
    <a href="templates/post.php?p=<?= $i?>">
       <div class="informtion">
         <h4><?= $data ['pages'][$i] ['title'] ?></h4>
        </div>
        <div class="img">
             <img src="./image/<?= $data ['pages'][$i] ['img'] ?>" alt="">
        </div>
      </a>
       </div>
   <?php }?>
</article>

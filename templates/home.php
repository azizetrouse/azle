<?php

include 'data/db.php';
?>
<article>
   <?php for($i=0;$i<count($data['pages']); $i++){ ?>
    <div class="box">
    
       <div class="informtion">
         <h4><?= $data ['pages'][$i] ['title'] ?></h4>
        </div>
        <div class="img">
             <img src="./image/<?= $data ['pages'][$i] ['img'] ?>" alt="">
             <a href="templates/post.php?p=<?= $i?>">
        <h4>red more</h4>
         </a>
        </div>
        
     
      
       </div>
   <?php }?>
</article>

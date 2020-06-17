<?php  include "../data/db.php";
include "./form.php";
$i = $_GET['p'];
?>
<div class="card">
<h4><?= $data ['pages'][$i] ['title'] ?></h4>
<div class="img">
<img src="../image/<?= $data ['pages'][$i] ['img'] ?>" alt="">
</div>
<p><?= $data ['pages'][$i] ['p'] ?></p>
<div>
<h5>   </h5>
<p></p>
</div>
</div>
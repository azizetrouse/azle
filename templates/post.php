<?php  include "../data/db.php";
include "../templates/header.php";
$i = $_GET['p'];
?>
<div class="card">
<h4><?= $data ['pages'][$i] ['title'] ?></h4>
<img src="./image/<?= $data ['pages'][$i] ['img'] ?>" alt="">
<div>
<h5>   </h5>
<p></p>
</div>
</div>
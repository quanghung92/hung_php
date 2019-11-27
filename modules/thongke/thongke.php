<?php
    $open='modules/thongke/dem.txt';
    $fo=fopen($open,'r');
    $count=fread($fo,filesize($open));
    $count++;
    $fc=fclose($fo);
    $fo=fopen($open,'w');
    $fw=fwrite($fo,$count);
    $fc=fclose($fo);

?>
<div class="card bg-light mb-3">
  <div class="card-header"><h3>Thông kê truy cập</h3></div>
  <div class="card-body">
  <p>Hiện có: <span><?php echo $count;?> </span>Người đang truy cập</p>
  </div>

</div>
   
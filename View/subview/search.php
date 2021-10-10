<?php 
  foreach ($data as $key => $value) 
  {
     ?>
    <div class="sach">
      Ma sach:  <?php echo $value['masach'] ;?> <br>
      Ten sach  <?php echo $value['tensach'] ;?>
      <hr>
    </div>
     <?php
  }
?>
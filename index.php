<?php
require_once("model/database.php");
require_once("model/danhmuc.php");
require_once("model/mathang.php");
$dm = new DANHMUC();
$mh = new MATHANG();
$danhmuc = $dm->laydanhmuc();
$mathang = $mh->laymathang();
 include 'PHP/top.php';
 ?>

<!-- ================================== -->
<div class="container">
  <?php foreach ($danhmuc as $d){  ?>
  <h3><a href="group.php?id='<?php echo $d["id"];?>'"><?php echo $d["tendanhmuc"]; ?>
  <span class="glyphicon glyphicon-triangle-right"></span></a></h3>
  <div class="row">
    <?php foreach($mathang as $m){ 
      if ($m["danhmuc_id"] == $d["id"]) {?>
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <a style="color:white" href="">
          <?php echo $d["tendanhmuc"]; ?>
          </a>  
        </div>  
        <div class="panel-footer"><a href=""><?php echo $m["tenmathang"];?></a></div>
        <div class="panel-body"><a href=""><img src="<?php echo $m["hinhanh"]; ?>" class="imgresponsive fake" alt=""></a>
        </div>
        
      </div>
    </div>    
    <?php }} ?>
    
  </div>
  <?php  }?>
</div>
<!-- ================================== -->
<?php include 'PHP/bottom.php';?>
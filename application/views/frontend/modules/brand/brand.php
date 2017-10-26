<style>
ul.list-group:after {
  clear: both;
  display: block;
  content: "";
}

.list-group-item {
    float: left;
}

</style>

<div class="container">

<ul class="list-group" style="padding-left:0px;">

  <?php foreach($dathome['level_4'] as $datBrand){

    ?>
    <li class="list-group-item img-responsive"><img src="<?php echo $datBrand['imageurl'];?>" class="asd1" alt="No Image Found" height="70%" width="195"></li>
  <?php  } ?>

						</ul>


         </center>
</div>

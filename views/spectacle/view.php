<?php include ROOT . '/views/template/header/header.php'; ?>

<div class="spacing"></div>

<div class="ml-auto col-md-8 mr-auto text-center viewTitle">
    <h4><?php echo $spectacleItem['title'];?></h4>
 </div>
 
<div class="spacing"></div>

<div class="ml-auto col-md-5 mr-auto text-center spectacleImage">
    <img src="<?php echo $spectacleItem['mainImg'];?>" alt="">
</div>

<div class="spacing"></div>

<div class="ml-auto col-md-8 mr-auto viewDescription text-center">
   <p><?php echo $spectacleItem['content']; ?></p>
</div>

<div class="spacing"></div>

<?php include ROOT . '/views/template/footer/footer.php'; ?>
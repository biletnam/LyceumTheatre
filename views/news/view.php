<?php include ROOT . '/views/template/header/header.php'; ?>

<div class="newsViewArea">
<div class="spacing"></div>

<div class="ml-auto col-md-8 mr-auto text-center viewTitle">
    <h4><?php echo $newsItem['title'];?></h4>
</div>
 
<div class="spacing"></div>

<div class="ml-auto col-md-8 mr-auto viewDescription text-center">
   <p><?php echo $newsItem['content'];?></p>
   <hr>
</div>

<div class="ml-auto col-md-8 mr-auto infoPublication text-center">
    <i><?php echo $newsItem['date'];?></i><br>
    <i><?php echo $newsItem['author'];?></i>
</div>

<div class="spacing"></div>
</div><!--viewContainer-->

<?php include ROOT . '/views/template/footer/footer.php';?>
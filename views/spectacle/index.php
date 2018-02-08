<?php include ROOT . '/views/template/header/header.php'; ?>
<?php foreach($publicList as $publicItem): ?>
<div class="container">
<div class="row">
    
    <div class="ml-auto col-lg-3">
        <img src="<?php echo $publicItem['priview'];?>" alt="" class="spectacleImage">
    </div><!--col-lg-3 -->
    <div class="ml-auto col-lg-7 mr-auto spectacleDescription">
        <h4><?php echo $publicItem['title'];?></h4><hr><br>
        <p>
            <b>Режжисер:</b> <?php echo $publicItem['producer'];?><br>
            <b>Жанр:</b> <?php echo $publicItem['genre'];?><br>
            <b>Продолжительность:</b> <?php echo $publicItem['duration'];?><br>
        </p>
        <br><br><a href="/spectacle/view<?php echo $publicItem['id'];?>">ПОДРОБНЕЕ</a>
    </div><!--col-lg-5 -->

    <div class="col-md-12 spacing">
    </div><!--spacing-->
    <div class="col-md-12 spacing">
    </div><!--spacing-->
    
</div><!--row-->
</div><!--container-->
<div class="spacing">
</div><?php endforeach; ?>
		
<?php include ROOT . '/views/template/footer/footer.php'; ?>
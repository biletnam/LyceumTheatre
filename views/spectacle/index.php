<?php include ROOT . '/views/template/header/header.php'; ?>
<?php foreach($publicList as $publicItem): ?>
<div class="row">

<div class="ml-auto col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-2 spectacleAvatar">
	<img src="<?php echo $publicItem['priview'];?>" alt="">
</div><!-- col-md-1 SpectacleAvatar-->

<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mr-auto spectacleDescription">
	<div class="row">
        <div class="col-md-12 topAreaDescription">
        	<h4><?php echo $publicItem['title'];?></h4>
            <div class="spacing"></div>
            
            <p><?php echo $publicItem['short_content'];?></p>
        </div><!--col-md-12-->
        <div class="col-md-12 buttomAreaDescription">
            <a href="/spectacle/view<?php echo $publicItem['id'];?>">ПОДРОБНЕЕ</a>
        </div><!--col-md-12-->
    </div><!--row-->
</div><!-- col-md-4 SpectacleDescription--></div><!--Row-->
<div class="spacing">
</div><?php endforeach; ?>
		
<?php include ROOT . '/views/template/footer/footer.php'; ?>
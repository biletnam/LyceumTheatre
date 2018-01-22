<?php include ROOT . '/views/template/header/header.php'; ?>
<!--Main Section-->

<div class="row newsArea">
	<!--ROW 1-->
	<div class="ml-auto col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
	<?php foreach($newsListR1 as $newsItem): ?>
		<div class="card">
			<img class="card-img-top" src="<?php echo $newsItem['priview'];?>" alt="">
			<div class="card-body">
			  <h4 class="card-title"><?php echo $newsItem['title'];?></h4>
			  <p class="card-text"><?php echo $newsItem['short_content'];?></p>
			  <hr>
			  <p class="card-text"><?php echo $newsItem['date'];?></p>
			  <a href="/news/view<?php echo $newsItem['id'];?>" class="btn btn-primary">ПОДРОБНЕЕ</a>
			</div>     
		</div>
		<div class="spacing"></div>
		<?php endforeach; ?>
	</div><!--col-md-2 ROW1-->
	


	<!--ROW 2-->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
	<?php foreach($newsListR2 as $newsItem): ?>
		<div class="card">
				<img class="card-img-top" src="<?php echo $newsItem['priview'];?>" alt="">
				<div class="card-body">
					<h4 class="card-title"><?php echo $newsItem['title'];?></h4>
					<p class="card-text"><?php echo $newsItem['short_content'];?></p>
					<hr>
			  		<p class="card-text"><?php echo $newsItem['date'];?></p>
					<a href="/news/view<?php echo $newsItem['id'];?>" class="btn btn-primary">ПОДРОБНЕЕ</a>
				</div>     
		</div>
		<div class="spacing"></div>	
	<?php endforeach; ?>
	</div> <!--col-md-2 ROW2-->


	<!--ROW 3-->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mr-auto">
	<?php foreach($newsListR3 as $newsItem): ?>
		<div class="card">
		<img class="card-img-top" src="<?php echo $newsItem['priview'];?>" alt="">
				<div class="card-body">
					<h4 class="card-title"><?php echo $newsItem['title'];?></h4>
					<p class="card-text"><?php echo $newsItem['short_content'];?></p>
					<hr>
			  		<p class="card-text"><?php echo $newsItem['date'];?></p>
					<a href="/news/view<?php echo $newsItem['id'];?>" class="btn btn-primary">ПОДРОБНЕЕ</a>
				</div>     
			</div>

			<div class="spacing"></div>
	<?php endforeach; ?>
		</div> <!--col-md-2 ROW3-->
</div><!-- Row  Main Section End-->
<?php include ROOT . '/views/template/footer/footer.php'; ?>
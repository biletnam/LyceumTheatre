<?php include ROOT . '/views/template/header/header.php'; ?>

<!--********SPECTACLE INFO SECTION*********-->
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

<!--********END SPECTACLE INFO SECTION*********-->

<!--********SPECTACLE REVIEWS SECTION*********-->

<div class="text-center"><h3>Отзывы зрителей</h3><hr></div>

<div class="spacing"></div>
<?php if (!empty($reviewsList)): ?>
<?php foreach($reviewsList as $reviewsItem): ?>
<div class="ml-auto col-md-6 mr-auto">
    <h5><?php echo $reviewsItem['name'] ." " . $reviewsItem['surename'];?></h5><hr>
    <p><?php echo $reviewsItem['reviews'];?></p>
    <i><?php echo $reviewsItem['date'];?></i>
    <div class="spacing"></div>
</div>
<div class="spacing"></div>
<?php endforeach;?>
<?php else: ?>
    <p class="text-center comment_p">Отзывов пока что-то нет</p>
<?php endif; ?>
<h5 class="text-center">Оставте свой отзыв</h5>
<div class="ml-auto col-md-5 mr-auto createReviewsSection"><hr>
<form enctype="multipart/form-data" method="post">
    <div class="form-group">

        <label>Имя</label>
        <input class="form-control" name="name" type="text" placeholder="Иван"
        <?php if (isset($_COOKIE['userName'])): ?> 
        value="<?php echo $_COOKIE['userName'];?>"
        <?php endif; ?>>

    </div>
    <div class="form-group">

        <label>Фамилия</label>
        <input class="form-control" name="surename" type="text" placeholder="Иванов" 
        <?php if (isset($_COOKIE['userSureName'])): ?> 
        value="<?php echo $_COOKIE['userSureName'];?>"
        <?php endif; ?>>

    </div>
    <div class="form-group">
        <label>Ваш отзыв</label>
        <textarea class="form-control" name="reviews" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Добавить</button>
    </form>
    <div class="spacing"></div>
</div><!--col-md-6 createReviewsSection-->

<!--********END SPECTACLE REVIEWS SECTION*********-->


<?php include ROOT . '/views/template/footer/footer.php'; ?>
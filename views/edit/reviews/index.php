<?php include ROOT . '/views/template/header/headerAdmin.php'; ?>

<div class="col-lg-12 spacing"></div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-3">
        <div class="btn-group btn-group" role="group" aria-label="Basic example">
            <a href="/edit/news" type="button" class="btn btn-secondary">Редактор Новостей</a>
            <a href="/edit/spectacle" type="button" class="btn btn-secondary">Редактор Спектаклей</a>
            <a href="/edit/afisha" type="button" class="btn btn-secondary">Редактор раздела "Афиша"</a>
            <a href="/edit/reviews" type="button" class="btn btn-secondary">Редактор Отзывов</a>
            
        </div>
</div> <!-- col-lg-4 -->
<div class="col-lg-12 spacing"></div>
    
<div class="col-lg-12">
    <h3 class="text-center">Таблица "Отзывы"</h3>

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Дата</th>
            <th>ID спекталя</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    <?php foreach($reviewsList as $reviewsItem): ?>
        <tr>
            <th scope="row"><?php echo $reviewsItem['id'];?></th>
            <td><?php echo $reviewsItem['name'];?></td>
            <td><?php echo $reviewsItem['surename'];?></td>
            <td><?php echo $reviewsItem['date'];?></td>
            <td><?php echo $reviewsItem['spectacle_id'];?></td>
            <td><a href="/edit/reviews/delete/<?php echo $reviewsItem['id'];?>" type="button" class="btn btn-danger" style="padding: 6px; width: 100px;">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
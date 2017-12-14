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
    <h3 class="text-center">Таблица "Новости"</h3>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Краткое описание</th>
            <th>Подробное описание</th>
            <th>Дата публикации</th>
            <th>Путь к изображению</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    <?php foreach($newsList as $newsItem): ?>
        <tr>
            <th scope="row"><?php echo $newsItem['id'];?></th>
            <td><?php echo $newsItem['title'];?></td>
            <td><?php echo $newsItem['short_content'];?></td>
            <td><?php echo $newsItem['content'];?></td>
            <td><?php echo $newsItem['date'];?></td>
            <td><?php echo $newsItem['priview'];?></td>
            <td><a href="/edit/news/delete/<?php echo $newsItem['id'];?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <a href="/edit/news/create" type="button" class="btn btn-primary ">Добавить</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
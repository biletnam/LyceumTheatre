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

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Краткое описание</th>
            <th>Подробное описание</th>
            <th>Дата публикации</th>
            <th>Путь к изображению</th>
            <th>№ Колонки</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    
    <?php foreach($newsList as $newsItem): ?>
    <form method="post">
        <tr>
            <th scope="row"><input class="text-center" type="text" name="id" value="<?php echo $newsItem['id'];?>" style="width: 30px;"></th>
            <td><textarea rows="7" name="title" style="width: 250px;"><?php echo $newsItem['title'];?></textarea></td>
            <td><textarea rows="15" name="short_content"style="width: 350px;"><?php echo $newsItem['short_content'];?></textarea></td>
            <td><textarea rows="15" name="content" style="width: 350px;"><?php echo $newsItem['content'];?></textarea></td>
            <td><?php echo $newsItem['date'];?></td>
            <td><textarea rows="7" name="priview" style="width: 250px;"><?php echo $newsItem['priview'];?></textarea></td>
            <td><input type="text" name="rowTable" style="width: 50px;" value="<?php echo $newsItem['rowTable'];?>"></td>
            <td><button name="update" type="submit" class="btn btn-primary">Обновить</button></td>
            <td><a href="/edit/news/delete/<?php echo $newsItem['id'];?>" type="button" class="btn btn-danger" style="padding: 6px; width: 100px;">Удалить</a></td>
    </form>
    <?php endforeach; ?>
    </tbody>
    </table>
    <hr>
    <a href="/edit/news/create" type="button" class="btn btn-primary ">Добавить</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
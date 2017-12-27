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
    <h3 class="text-center">Таблица "Спектакли"</h3>

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Краткое описание</th>
            <th>Подробное описание</th>
            <th>Дата публикации</th>
            <th>Путь к изображению-preview</th>
            <th>Путь к изображению-view</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    <?php foreach($publicList as $publicItem): ?>
    <form method="post">
        <tr>
            <th scope="row"><input class="text-center" type="text" name="id" value="<?php echo $publicItem['id'];?>" style="width: 30px;"></th>
            <td><textarea rows="7" name="title" style="width: 250px;"><?php echo $publicItem['title'];?></textarea></td>
            <td><textarea rows="15" name="short_content" style="width: 300px;"><?php echo $publicItem['short_content'];?></textarea></td>
            <td><textarea rows="15" name="content" style="width: 300px;"><?php echo $publicItem['content'];?></textarea></td>
            <td><?php echo $publicItem['date'];?></td>
            <td><textarea rows="7" name="priview" style="width: 200px;"><?php echo $publicItem['priview'];?></textarea></td>
            <td><textarea rows="7" name="maingImg" style="width: 200px;"><?php echo $publicItem['mainImg'];?></textarea></td>
            <td><button name="update" type="submit" class="btn btn-primary">Обновить</button></td>
            <td><a href="/edit/spectacle/delete/<?php echo $publicItem['id'];?>" type="button" class="btn btn-danger" style="padding: 6px; width: 100px;">Удалить</a></td>
        </tr>
    </form>
    <?php endforeach; ?>
    </tbody>
    </table>
    <hr>
    <a href="/edit/spectacle/create" type="button" class="btn btn-primary ">Добавить спектакль</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
<?php include ROOT . '/views/template/header/headerAdmin.php'; ?>

<div class="col-lg-12 spacing"></div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-3">
        <div class="btn-group btn-group" role="group" aria-label="Basic example">
            <a href="/edit/news" type="button" class="btn btn-secondary">Редактор Новостей</a>
            <a href="/edit/spectacle" type="button" class="btn btn-secondary">Редактор Спектаклей</a>
            <a href="/edit/afisha" type="button" class="btn btn-secondary">Редактор раздела "Афиша"</a>
        </div>
</div> <!-- col-lg-4 -->
<div class="col-lg-12 spacing"></div>

<div class="col-lg-12">
    <h3 class="text-center">Таблица "Спектакли"</h3>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Краткое описание</th>
            <th>Подробное описание</th>
            <th>Дата публикации</th>
            <th>Путь к изображению-preview</th>
            <th>Путь к изображению-view
            <th>Статус</th>

        </tr>
        </thead>
        <tbody>
    <?php foreach($publicList as $publicItem): ?>
        <tr>
            <th scope="row"><?php echo $publicItem['id'];?></th>
            <td><?php echo $publicItem['title'];?></td>
            <td><?php echo $publicItem['short_content'];?></td>
            <td><?php echo $publicItem['content'];?></td>
            <td><?php echo $publicItem['date'];?></td>
            <td><?php echo $publicItem['priview'];?></td>
            <td><?php echo $publicItem['mainImg'];?></td>
            <td><?php echo $publicItem['status'];?></td>

            <td><a href="/edit/spectacle/delete/<?php echo $publicItem['id'];?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <a href="/edit/spectacle/create" type="button" class="btn btn-primary ">Добавить спектакль</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
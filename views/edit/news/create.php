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

<div class="col-lg-6">

<form enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Заголовок</label>
        <input name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Краткое описание</label>
        <textarea name="short_content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Подробное описание</label>
        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Номер колонки (1-3)</label>
        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Загрузка изображения</label>
        <input type="file" name="img">
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Добавить</button>
    </form>
    
</div><!-- col-lg-12 -->


    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
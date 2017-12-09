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

<div class="col-lg-6">

<form enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">День</label>
        <input name="day" class="form-control">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Месяц</label>
    <input name="month" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">День недели</label>
        <input name="dweek" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Имя спектакля</label>
        <textarea name="spectacleName" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Адрес</label>
        <textarea name="adress" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Время</label>
        <textarea name="time" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">ID Спектакля</label>
        <textarea name="spectacleId" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Добавить</button>
    </form>
    
</div><!-- col-lg-12 -->


    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
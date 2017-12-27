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
    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h3 class="text-center">Таблица "Афиша"</h3>

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>День</th>
            <th>Месяц</th>
            <th>День недели</th>
            <th>Имя спекталя</th>
            <th>Адрес</th>
            <th>Время</th>
            <th>ID спекталя</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    <?php foreach($afishaList as $afishaItem): ?>
    <form method="post">
        <tr>
            <th scope="row"><input class="text-center" type="text" name="id" value="<?php echo $afishaItem['id'];?>" style="width: 30px;"></th>
            <td><input type="text" name="day" value="<?php echo $afishaItem['day'];?>" style="width: 30px;"></td>
            <td><input type="text" name="month" value="<?php echo $afishaItem['month'];?>" style="width: 30px;"></td>
            <td><input type="text" name="dweek" value="<?php echo $afishaItem['dweek'];?>" style="width: 30px;"></td>
            <td><textarea rows="4" name="spectacleName" style="width: 250px;"><?php echo $afishaItem['spectacleName'];?></textarea></td>
            <td><textarea rows="3" name="adress" style="width: 200px;"><?php echo $afishaItem['adress'];?></textarea></td>
            <td><input type="text" name="time" value="<?php echo $afishaItem['time'];?>" style="width: 80px;"></td>
            <td><input type="text" name="spectacleId" value="<?php echo $afishaItem['spectacleId'];?>" style="width: 30px;"></td>
            <td><button name="update" type="submit" class="btn btn-primary">Обновить</button></td>
            <td><a href="/edit/afisha/delete/<?php echo $afishaItem['id'];?>" type="button" class="btn btn-danger" style="padding: 6px; width: 100px;">Удалить</a></td>
        </tr>
    </form>
    <?php endforeach; ?>
    </tbody>
    </table>
    <hr>
    <a href="/edit/afisha/create" type="button" class="btn btn-primary">Добавить</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
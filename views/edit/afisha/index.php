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
    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h3 class="text-center">Таблица "Афиша"</h3>

    <table class="table">
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
        </tr>
        </thead>
        <tbody>
    <?php foreach($afishaList as $afishaItem): ?>
        <tr>
            <th scope="row"><?php echo $afishaItem['id'];?></th>
            <td><?php echo $afishaItem['day'];?></td>
            <td><?php echo $afishaItem['month'];?></td>
            <td><?php echo $afishaItem['dweek'];?></td>
            <td><?php echo $afishaItem['spectacleName'];?></td>
            <td><?php echo $afishaItem['adress'];?></td>
            <td><?php echo $afishaItem['time'];?></td>
            <td><?php echo $afishaItem['spectacleId'];?></td>
            <td><a href="/edit/afisha/delete/<?php echo $afishaItem['id'];?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <a href="/edit/afisha/create" type="button" class="btn btn-primary">Добавить</a>
    <div class="col-lg-12 spacing"></div>
</div><!-- col-lg-8 -->

    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
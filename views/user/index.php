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
    <h3 class="text-center">Зарегистрированные пользователи</h3>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Surename</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        
    <?php foreach($userList as $userItem): ?>
        <tr>
            <th scope="row"><?php echo $userItem['id'];?></th>
            <td><?php echo $userItem['name'];?></td>
            <td><?php echo $userItem['surname'];?></td>
            <td><?php echo $userItem['email'];?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div><!-- col-lg-8 -->


    </div><!-- row-->
</div> <!-- container -->
              
</body>

</html>
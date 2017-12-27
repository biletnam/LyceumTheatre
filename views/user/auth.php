<?php include ROOT . '/views/template/header/headerAdmin.php'; ?>

<div class="container-fluid adminSection">
<div class="row">
    <div class="col-lg-6 adminLeftSection">
        <div class="row">
            <div class="container">
                <div class="ml-auto col-lg-10 mr-auto info text-center">
                    <p>Панель Администратора || Fessracha Admin Template
                    </p><hr>
                    <p>Author: Shangin Eugene || Fessracha
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 adminRightSection">
        <div class="row">
            <div class="containter">
                    <div class="col-lg-6 signup">
                         <div class="well">
                            <form role="form" method="post">
                                <label for="exampleInputPassword1">ВХОД В СИСТЕМУ</label>
                                    <div class="form-group">
                                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Войти</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>      
</body>

</html>
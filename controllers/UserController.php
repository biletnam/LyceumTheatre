<?php

include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Spectacle.php';

class UserController extends AdminBase 
{

    public function actionIndex() {

        self::checkAdmin();
        $userList = array();
        $userList = User::getUserList();
        

        require_once(ROOT . '/views/user/index.php');
        return true;
    }



    public function actionAuth() {
        $email = '';
        $password = '';

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

        }

        $userId = User::checkUserData($email, $password);
        
        if($userId == false) {
            $errors[] = 'Неправильные данные для входа на сайт';
        }
        else {
            User::auth($userId);

            header("Location: /user/admin-panel");
        }
       
        User::checkRole();

        require_once(ROOT . '/views/user/auth.php');
        return true;
    }

    public function actionLogout()
    {
        // Стартуем сессию
        session_start();
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["role"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

}





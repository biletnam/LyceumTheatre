<?php 

class User {

     /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет email
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkRole() {
        //Проверка прав пользователя и запись в сессию
        $db = Db::getConnection();
        
        $sql = "SELECT * FROM user";
        
        $result = $db->prepare($sql);
        $result->execute();
        
        $user = $result->fetch();
        
        if($user['role'] == 'user')          { $_SESSION['role'] = 'user'; }
        elseif($user['role'] == 'admin')          { $_SESSION['role'] = 'admin'; }  
        elseif($user['role'] == 'moderator')     { $_SESSION['role'] = 'moderator';}

    }

    public static function auth($userId) {

        session_start();
        $_SESSION['user'] = $userId;
        $_SESSION['role'] = 'user';

        return true;
    }

    public static function checkUserData($email, $password) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();

        if($user) {
            return $user['id'];
        }

        return false;
    }

    public static function checkLogged() {
        if(isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/user-auth");

    }

    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }
     
    public static function getUserList() {
        
    $db = Db::getConnection();
       
    
    $userList = array();
       
    $result = $db->query("SELECT id, name, surname, email, role FROM user");        
    $i = 0;
    while($row = $result->fetch()) {
         $userList[$i]['id'] = $row['id'];
         $userList[$i]['name'] = $row['name'];
         $userList[$i]['surname'] = $row['surname'];
         $userList[$i]['email'] = $row['email'];
         $i++;
     }
       
    return $userList; 
    }
}
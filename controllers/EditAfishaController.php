<?php

include_once ROOT . '/models/Afisha.php';
include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Edit.php';

class EditAfishaController extends AdminBase
{

    public function actionIndex() {

        // Проверка доступа
        self::checkAdmin();
        $afishaList = Afisha::getAfishaList();

        require_once(ROOT. '/views/edit/afisha/index.php');
        return true;
    }

    public function actionCreate() 
    {
        // Проверка доступа
        self::checkAdmin();
        
        $day = '';
        $month = '';
        $dweek = '';
        $spectacleName = '';
        $adress = '';
        $time = '';
        $spectacleId = '';


        if (isset($_POST['submit'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $dweek = $_POST['dweek'];
            $spectacleName = $_POST['spectacleName'];
            $adress = $_POST['adress'];
            $time = $_POST['time'];
            $spectacleId = $_POST['spectacleId'];

            Edit::createAfishaItem($day, $month, $dweek, $spectacleName, $adress, $time, $spectacleId);
            header("Location: /edit/afisha");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/edit/afisha/create.php');
        return true;
    }

    public function actionDelete($id) {
        // Проверка доступа
        self::checkAdmin();
        
        Edit::deleteAfishaItem($id);
        header("Location: /edit/afisha");
        
        return true;
    }
   
}





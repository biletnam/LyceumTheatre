<?php

include_once ROOT . '/models/Spectacle.php';
include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Edit.php';

class EditSpectacleController extends AdminBase
{

    public function actionIndex() {

        // Проверка доступа
        self::checkAdmin();
        $publicList = Spectacle::getPublicListEdit();

        require_once(ROOT. '/views/edit/spectacle/index.php');
        return true;
    }

    public function actionCreate() 
    {
        // Проверка доступа
        self::checkAdmin();
        
        $title = '';
        $short_content = '';
        $content = '';
        
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $short_content = $_POST['short_content'];
            $content = $_POST['content'];
            $pathToImg = '/views/template/img/spectacle/';
            $preview = '';
            $view = '';

            if(!empty($_FILES['preview']['tmp_name'])){
                $preview = $pathToImg . $_FILES['preview']['name'];
            }

            if(!empty($_FILES['view']['tmp_name'])){
                $view = $pathToImg . $_FILES['view']['name'];
            }
            
            Edit::createSpectacle($title, $short_content, $content, $preview, $view);
            move_uploaded_file($_FILES['preview']['tmp_name'], ROOT . $pathToImg .$_FILES['preview']['name']);
            move_uploaded_file($_FILES['view']['tmp_name'], ROOT . $pathToImg .$_FILES['view']['name']);
            header("Location: /edit/spectacle");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/edit/spectacle/create.php');
        return true;
    }

    public function actionDelete($id) {
        // Проверка доступа
        self::checkAdmin();
        
        Edit::deleteSpectacle($id);
        header("Location: /edit/spectacle");
        
        return true;
    }


    

   
}





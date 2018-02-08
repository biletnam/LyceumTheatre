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

        
        // Проверка доступа
        self::checkAdmin();
        $newsList = News::getNewsList();

        $id = '';
        $title = '';
        $content = '';
        $priview = '';
        $producer = '';
        $genre = '';
        $duration = '';

        
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $priview = $_POST['priview'];
            $producer = $_POST['producer'];
            $genre = $_POST['genre'];
            $duration = $_POST['duration'];

   

            Edit::updateSpectacle($id, $title, $content, $priview, $producer, $genre, $duration);
            header("Location: /edit/spectacle");
        }

        require_once(ROOT. '/views/edit/spectacle/index.php');
        return true;
    }

    public function actionCreate() 
    {
        // Проверка доступа
        self::checkAdmin();
        
        $title = '';
        $content = '';
        $priview = '';
        $producer = '';
        $genre = '';
        $duration = '';
    
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $producer = $_POST['producer'];
            $genre = $_POST['genre'];
            $duration = $_POST['duration'];
            $pathToImg = '/views/template/img/spectacle/';


            if(!empty($_FILES['preview']['tmp_name'])){
                $preview = $pathToImg . $_FILES['preview']['name'];
            }

            if(!empty($_FILES['view']['tmp_name'])){
                $view = $pathToImg . $_FILES['view']['name'];
            }
            
            Edit::createSpectacle($title, $content, $priview, $producer, $genre, $duration);
            move_uploaded_file($_FILES['preview']['tmp_name'], ROOT . $pathToImg .$_FILES['preview']['name']);
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





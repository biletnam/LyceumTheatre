<?php

include_once ROOT . '/models/News.php';
include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Edit.php';

class EditNewsController extends AdminBase
{

    public function actionIndex() {

        // Проверка доступа
        self::checkAdmin();
        $newsList = News::getNewsList();

        $id = '';
        $title = '';
        $short_content = '';
        $content = '';
        $rowTable = '';
        $priview = '';
        
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $short_content = $_POST['short_content'];
            $content = $_POST['content'];
            $rowTable = $_POST['rowTable'];
            $priview = $_POST['priview'];
   

            Edit::updateNews($id, $title, $short_content, $content, $rowTable, $priview);
            header("Location: /edit/news");
        }

        require_once(ROOT. '/views/edit/news/index.php');
        return true;
    }

    public function actionCreate() 
    {
        // Проверка доступа
        self::checkAdmin();
        
        $title = '';
        $short_content = '';
        $content = '';
        $rowTable = '';


        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $short_content = $_POST['short_content'];
            $content = $_POST['content'];
            $rowTable = $_POST['rowTable'];
            $pathToImg = '/views/template/img/news/';
            $priview = '';

            if(!empty($_FILES['img']['tmp_name'])){
                $priview = $pathToImg . $_FILES['img']['name'];
            }
   
            Edit::createNews($title, $short_content, $content, $rowTable, $priview);
            move_uploaded_file($_FILES['img']['tmp_name'], ROOT . $pathToImg .$_FILES['img']['name']);
            header("Location: /edit/news");
        }
        
        
        require_once(ROOT . '/views/edit/news/create.php');
        return true;
    }

    

    public function actionDelete($id) {
        // Проверка доступа
        self::checkAdmin();
        
        Edit::deleteNews($id);
        header("Location: /edit/news");
        
        return true;
    }


    

   
}





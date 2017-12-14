<?php

include_once ROOT . '/models/News.php';
include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Edit.php';
include_once ROOT . '/models/Reviews.php';

class EditReviewsController extends AdminBase
{

    public function actionIndex() {

        // Проверка доступа
        self::checkAdmin();
        $reviewsList = Reviews::getReviewsList();

        require_once(ROOT. '/views/edit/reviews/index.php');
        return true;
    }

    
    public function actionDelete($id) {
        // Проверка доступа
        self::checkAdmin();
        
        Edit::deleteReviewsItem($id);
        header("Location: /edit/reviews");
        
        return true;
    }


    

   
}





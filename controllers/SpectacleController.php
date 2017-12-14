<?php

include_once ROOT . '/models/Spectacle.php';
include_once ROOT . '/models/Reviews.php';
include_once ROOT . '/models/Edit.php';

class SpectacleController
{

    public function actionIndex() {
        
        $publicList = array();
        $publicList = Spectacle::getPublicList();
        
        
        require_once(ROOT . '/views/spectacle/index.php');
  
        return true;
    }


    public function actionView($id) {
        $spectacleList = array();
        $spectacleList = Spectacle::getPublicList();
        
        $reviewsList = array();
        $reviewsList = Reviews::getReviewsListBySpectacleId($id);

        $name = '';
        $surename = '';
        $reviews = '';
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surename = $_POST['surename'];
            $reviews = $_POST['reviews'];
            
            Edit::createReviews($name, $surename, $reviews, $id);
            header("Location: /spectacle/view" . $id);
        }
        
        if($id) {
            $spectacleItem = Spectacle::getPublicItemById($id);
            require_once(ROOT . '/views/spectacle/view.php');
        }
        return true;
    }
   
}





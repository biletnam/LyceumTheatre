<?php

include_once ROOT . '/models/Spectacle.php';

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
        
        if($id) {
            $spectacleItem = Spectacle::getPublicItemById($id);
            require_once(ROOT . '/views/spectacle/view.php');
        }
        return true;
    }
   
}





<?php

include_once ROOT . '/models/Afisha.php';
include_once ROOT . '/models/Spectacle.php';

class AfishaController
{

    public function actionIndex() {
        $afishaList = array();
        $afishaList = Afisha::getAfishaList();
        
        

        require_once(ROOT . '/views/afisha/index.php');
        return true;
    }

    public function actionView($id) {
        $spectacleList = array();
        $spectacleList = Spectacle::getPublicList();
        
        $afishaList = array();
        $afishaList = Afisha::getAfishaList();
        
        if($id) {
            $spectacleItem = Spectacle::getPublicItemById($id);
            require_once(ROOT . '/views/spectacle/view.php');
        }
        return true;
    }

}





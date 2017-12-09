<?php

include_once ROOT . '/models/Spectacle.php';

class PublicationController
{

    public function actionAbout() {

        require_once(ROOT . '/views/publication/about.php');

        return true;
    }

    public function actionAfisha() {

        require_once(ROOT. '/views/publication/afisha.php');

        return true;
    }

   
}





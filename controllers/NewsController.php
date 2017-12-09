<?php

include_once ROOT . '/models/News.php';

class NewsController
{

    public function actionIndex() {
        $newsListR1 = array();
        $newsListR1 = News::getNewsListRows(1);
        
        $newsListR2 = array();
        $newsListR2 = News::getNewsListRows(2);

        $newsListR3 = array();
        $newsListR3 = News::getNewsListRows(3);
        
        require_once(ROOT . '/views/news/index.php');
  
        return true;
    }

    public function actionView($id) {
        $newsList = array();
        $newsList = News::getNewsList();
        
        if($id) {
            $newsItem = News::getNewsItemById($id);
            require_once(ROOT . '/views/news/view.php');
        }
        return true;
    }

}





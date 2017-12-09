<?php

class News {

    const SHOW_DEFAULT = 3; // Кол-во отображаемых элементов
    /**
     * Returns single blog item with specified id
     * @param integer $id
     */

    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function getNewsListRows($rowTable) {
        
    $db = Db::getConnection();
       
    $newsList = array();
       
    $result = $db->query("SELECT id, title, short_content, content, date, priview FROM news WHERE rowTable=" . $rowTable . " ORDER BY date DESC "
            . "LIMIT ".self::SHOW_DEFAULT);        
       
    $i = 0;
    while($row = $result->fetch()) {
         $newsList[$i]['id'] = $row['id'];
         $newsList[$i]['title'] = $row['title'];
         $newsList[$i]['short_content'] = $row['short_content'];
         $newsList[$i]['content'] = $row['content'];
         $newsList[$i]['date'] = $row['date'];
         $newsList[$i]['priview'] = $row['priview'];
         $i++;
     }
       
    return $newsList; 
}

    public static function getNewsList() {
        
    $db = Db::getConnection();
       
    $newsList = array();
       
    $result = $db->query("SELECT id, title, short_content, content, date, priview FROM news ORDER BY date DESC");        
       
    $i = 0;
    while($row = $result->fetch()) {
         $newsList[$i]['id'] = $row['id'];
         $newsList[$i]['title'] = $row['title'];
         $newsList[$i]['short_content'] = $row['short_content'];
         $newsList[$i]['content'] = $row['content'];
         $newsList[$i]['date'] = $row['date'];
         $newsList[$i]['priview'] = $row['priview'];
         $i++;
     }
       
    return $newsList; 
}

}
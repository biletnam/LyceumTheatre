<?php

class Spectacle {

    const SHOW_DEFAULT = 5; // Кол-во отображаемых элементов
    /**
     * Returns single blog item with specified id
     * @param integer $id
     */

    public static function getPublicItemById($id)
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM spectacle WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC); 
            
            $publicItem = $result->fetch();

            return $publicItem;
        }
    }

    public static function getPublicList($page = 1) {
        
    $db = Db::getConnection();
       
    $page = intval($page);
    $offset = ($page - 1) * self::SHOW_DEFAULT;
       
    $publicList = array();
       
    $result = $db->query("SELECT id, title, short_content, content, date, priview, mainImg, status FROM spectacle ORDER BY date DESC "
            . "LIMIT ".self::SHOW_DEFAULT
            . " OFFSET " . $offset);        
       
    $i = 0;
    while($row = $result->fetch()) {
         $publicList[$i]['id'] = $row['id'];
         $publicList[$i]['title'] = $row['title'];
         $publicList[$i]['short_content'] = $row['short_content'];
         $publicList[$i]['content'] = $row['content'];
         $publicList[$i]['date'] = $row['date'];
         $publicList[$i]['priview'] = $row['priview'];
         $publicList[$i]['status'] = $row['status'];
         $publicList[$i]['mainImg'] = $row['mainImg'];
         $i++;
     }
       
    return $publicList; }

    public static function getPublicListEdit($page = 1) {
        
    $db = Db::getConnection();
       
    $publicList = array();
       
    $result = $db->query("SELECT id, title, short_content, content, date, priview, mainImg, status FROM spectacle ORDER BY date DESC");        
       
    $i = 0;
    while($row = $result->fetch()) {
         $publicList[$i]['id'] = $row['id'];
         $publicList[$i]['title'] = $row['title'];
         $publicList[$i]['short_content'] = $row['short_content'];
         $publicList[$i]['content'] = $row['content'];
         $publicList[$i]['date'] = $row['date'];
         $publicList[$i]['priview'] = $row['priview'];
         $publicList[$i]['status'] = $row['status'];
         $publicList[$i]['mainImg'] = $row['mainImg'];
         $i++;
     }
       
    return $publicList; }

}
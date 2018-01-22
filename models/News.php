<?php

class News {
    
    const DATE_MONTHS = array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля",
     "Августа", "Сентября", "Октября", "Ноября", "Декабря");

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
            
            $result = $db->query("SELECT title, content, DATE_FORMAT(date, \"%d %m %Y\"), author FROM news WHERE id=" . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();
            // Форматируем время в вид 01.Января.2017
            $newsItem['date'] = self::dateRuReplace($newsItem['DATE_FORMAT(date, "%d %m %Y")']);
            //Удаляем временный элемент (форматирование даты)
            unset($newsItem['DATE_FORMAT(date, "%d %m %Y")']);
            return $newsItem;
        }
    }

    public static function getNewsListRows($rowTable) {
    
    $db = Db::getConnection();
   
    $newsList = array();
    
    $result = $db->query("SELECT id, title, short_content, content, DATE_FORMAT(date, \"%d %m %Y\"), priview FROM news WHERE rowTable=" . $rowTable . " ORDER BY date DESC "
            . "LIMIT ".self::SHOW_DEFAULT);        
       
    $i = 0;
    while($row = $result->fetch()) {
         $newsList[$i]['id'] = $row['id'];
         $newsList[$i]['title'] = $row['title'];
         $newsList[$i]['short_content'] = $row['short_content'];
         $newsList[$i]['content'] = $row['content'];
         // Форматируем время в вид 01.Января.2017
         $newsList[$i]['date'] = $row['DATE_FORMAT(date, "%d %m %Y")'];
         $newsList[$i]['date'] = self::dateRuReplace($newsList[$i]['date']);
         $newsList[$i]['priview'] = $row['priview'];
         $i++;
     }

    return $newsList; 
}

    public static function getNewsList() {
        
    $db = Db::getConnection();
       
    $newsList = array();
       
    $result = $db->query("SELECT id, title, short_content, content, date, priview, rowTable FROM news ORDER BY date DESC");        
       
    $i = 0;
    while($row = $result->fetch()) {
         $newsList[$i]['id'] = $row['id'];
         $newsList[$i]['title'] = $row['title'];
         $newsList[$i]['short_content'] = $row['short_content'];
         $newsList[$i]['content'] = $row['content'];
         $newsList[$i]['date'] = $row['date'];
         $newsList[$i]['priview'] = $row['priview'];
         $newsList[$i]['rowTable'] = $row['rowTable'];
         $i++;
     }
    
    return $newsList; 
}

public static function dateRuReplace($date){
    // Форматируем время в вид 01.Января.2017
    $dateFormat = explode(' ',$date);
    
    //Замена месяца
    switch ($dateFormat[1]) {
        case 01:
            $dateFormat[1] = self::DATE_MONTHS[0];
            break;
        case 02:
            $dateFormat[1] = self::DATE_MONTHS[1];
            break;
        case 03:
            $dateFormat[1] = self::DATE_MONTHS[2];
            break;
        case 04:
            $dateFormat[1] = self::DATE_MONTHS[3];
            break;
        case 05:
            $dateFormat[1] = self::DATE_MONTHS[4];
            break;
        case 06:
            $dateFormat[1] = self::DATE_MONTHS[5];
            break;
        case 07:
            $dateFormat[1] = self::DATE_MONTHS[6];
            break;
        case 08:
            $dateFormat[1] = self::DATE_MONTHS[7];
            break;
        case 09:
            $dateFormat[1] = self::DATE_MONTHS[8];
            break;
        case 10:
            $dateFormat[1] = self::DATE_MONTHS[9];
            break;
        case 11:
            $dateFormat[1] = self::DATE_MONTHS[10];
            break;
        case 12:
            $dateFormat[1] = self::DATE_MONTHS[11];
            break; 
    }

    $date = implode(' ',$dateFormat);

    return $date;
}


}


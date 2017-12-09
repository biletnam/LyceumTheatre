<?php

class Afisha  {

    const SHOW_DEFAULT = 10; // Кол-во отображаемых элементов
    /**
     * Returns single blog item with specified id
     * @param integer $id
     */

    public static function getAfishaItemById($id)
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM afisha WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC); 
            
            $publicItem = $result->fetch();

            return $publicItem;
        }
    }

    public static function getAfishaList($page = 1) {
        
    $db = Db::getConnection();
       
    $page = intval($page);
    $offset = ($page - 1) * self::SHOW_DEFAULT;
       
    $afishaList = array();
       
    $result = $db->query("SELECT id, day, month, dweek, spectacleName, adress, time, spectacleId FROM afisha ORDER BY id ASC "
            . "LIMIT ".self::SHOW_DEFAULT
            . " OFFSET " . $offset);        
       
    $i = 0;
    while($row = $result->fetch()) {
         $afishaList[$i]['id'] = $row['id'];
         $afishaList[$i]['day'] = $row['day'];
         $afishaList[$i]['month'] = $row['month'];
         $afishaList[$i]['dweek'] = $row['dweek'];
         $afishaList[$i]['spectacleName'] = $row['spectacleName'];
         $afishaList[$i]['adress'] = $row['adress'];
         $afishaList[$i]['time'] = $row['time'];
         $afishaList[$i]['spectacleId'] = $row['spectacleId'];
         $i++;
     }
       
    return $afishaList; 
}


}
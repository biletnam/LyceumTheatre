<?php

class Edit {

    
public static function createSpectacle($title, $content, $priview, $producer, $genre, $duration) {
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO spectacle (title, content, priview, producer, genre, duration) '
            . 'VALUES (:title, :content, :priview, :producer, :genre, :duration)';
    
    $result = $db->prepare($sql);
    $result->bindParam(':title', $title, PDO::PARAM_STR);
    $result->bindParam(':content', $content, PDO::PARAM_STR);
    $result->bindParam(':priview', $priview, PDO::PARAM_STR);
    $result->bindParam(':producer', $producer, PDO::PARAM_STR);
    $result->bindParam(':genre', $genre, PDO::PARAM_STR);
    $result->bindParam(':duration', $duration, PDO::PARAM_STR);
     
    return $result->execute();
}

public static function createNews($title, $short_content, $content, $rowTable, $priview) {
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO news (title, short_content, content, rowTable, priview) '
            . 'VALUES (:title, :short_content, :content, :rowTable, :priview)';
    
    $result = $db->prepare($sql);
    $result->bindParam(':title', $title, PDO::PARAM_STR);
    $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
    $result->bindParam(':content', $content, PDO::PARAM_STR);
    $result->bindParam(':rowTable', $content, PDO::PARAM_STR);
    $result->bindParam(':priview', $priview, PDO::PARAM_STR);

    return $result->execute();     
}

public static function createAfishaItem($day, $month, $dweek, $spectacleName, $adress, $time, $spectacleId) {
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO afisha (day, month, dweek, spectacleName, adress, time, spectacleId) '
            . 'VALUES (:day, :month, :dweek, :spectacleName, :adress, :time, :spectacleId)';
    
    $result = $db->prepare($sql);
    $result->bindParam(':day', $day, PDO::PARAM_STR);
    $result->bindParam(':month', $month, PDO::PARAM_STR);
    $result->bindParam(':dweek', $dweek, PDO::PARAM_STR);
    $result->bindParam(':spectacleName', $spectacleName, PDO::PARAM_STR);
    $result->bindParam(':adress', $adress, PDO::PARAM_STR);
    $result->bindParam(':time', $time, PDO::PARAM_STR);
    $result->bindParam(':spectacleId', $spectacleId, PDO::PARAM_STR);

    return $result->execute();     
}

public static function updateNews($id, $title, $short_content, $content, $rowTable, $priview) {
    $db = Db::getConnection();

    $sql = $db->query("UPDATE `news` SET `title` = '".$title."', `short_content` = '".$short_content."', `content` = '".$content.
    "', `priview` = '".$priview."', `rowTable` = '".$rowTable ."' WHERE `news`.`id` = ".$id);

    return true;
}

public static function deleteNews($id){
            
    $db = Db::getConnection();
                    
    $sql = 'DELETE FROM `news` WHERE `news`.`id` = :id';
                    
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
                    
    return $result->execute();
}

public static function updateSpectacle($id, $title, $content, $priview, $producer, $genre, $duration) {
    $db = Db::getConnection();

    $sql = $db->query("UPDATE `spectacle` SET `title` = '".$title."', `content` = '".$content.
    "', `priview` = '".$priview."', `producer` = '".$producer."', `genre` = '".$genre."', `duration` = '".$duration.
    "' WHERE `spectacle`.`id` = ".$id);

    return true;
}

public static function deleteSpectacle($id){
    
$db = Db::getConnection();
            
$sql = 'DELETE FROM `spectacle` WHERE `spectacle`.`id` = :id';
            
$result = $db->prepare($sql);
$result->bindParam(':id', $id, PDO::PARAM_STR);
            
return $result->execute();
}

public static function updateAfishaItem($id, $day, $month, $dweek, $spectacleName, $adress, $time, $spectacleId) {
    $db = Db::getConnection();

    $sql = $db->query("UPDATE `afisha` SET `day` = '".$day."', `month` = '".$month."', `dweek` = '".$dweek."', `spectacleName` = '".$spectacleName.
    "', `adress` = '".$adress ."', `time` = '".$time ."', `spectacleId` = '".$spectacleId ."' WHERE `afisha`.`id` = ".$id);

    return true;
}

public static function deleteAfishaItem($id){
    
$db = Db::getConnection();
            
$sql = 'DELETE FROM `afisha` WHERE `afisha`.`id` = :id';
            
$result = $db->prepare($sql);
$result->bindParam(':id', $id, PDO::PARAM_STR);
            
return $result->execute();
}

public static function createReviews($name, $surename, $reviews, $spectacle_id) {
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO reviews (name, surename, reviews, spectacle_id) '
            . 'VALUES (:name, :surename, :reviews, :spectacle_id)';
    
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':surename', $surename, PDO::PARAM_STR);
    $result->bindParam(':reviews', $reviews, PDO::PARAM_STR);
    $result->bindParam(':spectacle_id', $spectacle_id, PDO::PARAM_STR);
    
    return $result->execute();     
}


public static function deleteReviewsItem($id){
    
    $db = Db::getConnection();
                
    $sql = 'DELETE FROM `reviews` WHERE `reviews`.`id` = :id';
                
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_STR);
                
    return $result->execute();
}

}
<?php

class Reviews  {

    public static function getReviewsListBySpectacleId($spectacle_id)
    {
       $db = Db::getConnection();
       
       $reviewsList = array();
       $result = $db->query("SELECT id, name, surename, reviews, date, spectacle_id FROM reviews WHERE spectacle_id=" . $spectacle_id);
       
       $i = 0;
       while($row = $result->fetch()) {
           $reviewsList[$i]['id'] = $row['id'];
           $reviewsList[$i]['name'] = $row['name'];
           $reviewsList[$i]['surename'] = $row['surename'];
           $reviewsList[$i]['reviews'] = $row['reviews'];
           $reviewsList[$i]['date'] = $row['date'];
           $reviewsList[$i]['spectacle_id'] = $row['spectacle_id'];
           $i++;
        }
       
       return $reviewsList;
    }

    public static function getReviewsList() 
    {
        $db = Db::getConnection();
        
        $reviewsList = array();
        $result = $db->query("SELECT id, name, surename, reviews, date, spectacle_id FROM reviews");
        
        $i = 0;
        while($row = $result->fetch()) {
            $reviewsList[$i]['id'] = $row['id'];
            $reviewsList[$i]['name'] = $row['name'];
            $reviewsList[$i]['surename'] = $row['surename'];
            $reviewsList[$i]['reviews'] = $row['reviews'];
            $reviewsList[$i]['date'] = $row['date'];
            $reviewsList[$i]['spectacle_id'] = $row['spectacle_id'];
            $i++;
         }
        
        return $reviewsList;
    }


}
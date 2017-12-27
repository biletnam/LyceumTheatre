<?php

return array(
    //EditReviews
    'edit/reviews/delete/([0-9]+)' => 'editReviews/delete/$1',
    'edit/reviews' => 'editReviews/index',
    
   //EditAfisha
    'edit/afisha/create' => 'editAfisha/create',
    'edit/afisha/delete/([0-9]+)' => 'editAfisha/delete/$1',
    'edit/afisha' => 'editAfisha/index',

    //EditNews
    'edit/news/update/([0-9]+)' => 'editNews/update/$1',
    'edit/news/create' => 'editNews/create',
    'edit/news/delete/([0-9]+)' => 'editNews/delete/$1',
    'edit/news' => 'editNews/index',

    //EditSpectacle
    'edit/spectacle/create' => 'editSpectacle/create',
    'edit/spectacle/delete/([0-9]+)' => 'editSpectacle/delete/$1',
    'edit/spectacle' => 'editSpectacle/index',
    
    //Afisha
    'afisha/view([0-9]+)' => 'afisha/view/$1',
    'afisha' => 'afisha/index',

    //Spectacle
    'spectacle/view([0-9]+)' => 'spectacle/view/$1',
    'spectacle' => 'spectacle/index',
     
    //User
    'user/logout' => 'user/logout',
    'user/admin-panel' => 'user/index',
    'user/user-auth' => 'user/auth',

    
    //Publication      controller  action
    'about' => 'publication/about',

    //News
    'news/view([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    

    '' => 'news/index', // actionIndex в SiteController
/* Очень важную роль играет строка в которой находиться маршрут
Ссылки нулевого уровня нужно распологать снизу , а выше в порядке возрастания
*/
);

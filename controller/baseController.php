<?php
    if(isset($_GET['page'])){
        $route = $_GET['page'];
        # tester la page
        print  "la page : $route";
       /*  organiser les routes */
        if($route==1){
            include_once "./page/index.html";
        }
        if($route==2){
            include_once "./page/formation.html";
        }
        if($route==3){
            include_once "./page/contact.html";
        }
        else if($route>=3 || $route<=0){
            echo '<p class="warning"><i class="far fa-frown"></i> La page demandée n\'existe pas!!</p>';
            //header("HTTP/1.0 404 Not Found");
        }
    }
    else{
        include_once "./page/index.html";
    }
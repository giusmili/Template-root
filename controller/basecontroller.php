<?php
    class Views{
        static function root(){
               # code d'appel GET
        if(isset($_GET['page'])){
            # print "Numéro de page : ".$_GET['page'];

            # condition imbriquée
            $views = $_GET['page'];
            if($views == 1){
                include_once './views/presentation.html';
            }
            if($views == 2){
                include_once  './views/formation.html';
            }
            if($views == 3){
                include_once  './views/about.html';
            }
            else if($views >= 3 || $views <= 0){
                print "<p  class=\"warning\"> Erreur : la page demandée n'existe pas!!</p>";
            }
        }
        else
            {
            include_once "./views/presentation.html";
            }
        }
}
# appel la fonction de la class
Views::root();
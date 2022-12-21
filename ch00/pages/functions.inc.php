<?php
    /* 
    fonctions nommées, anonymes, paramètres et fléché
    POO => class{fonction => méthode} 
    */

/* function user(){
    $_first_name = "Tony";
    $_age = 18;
    print "<p>".$_first_name." ".$_age."</p>";
}
user(); */
$_login = "tony"; 
$_password = 2023;


function user(string $_login, int $_password){
    if($_login && $_password){
        return $_login." ".$_password;
    }
    else{
        print "pas de résultat";
    }
}
print user($_login, $_password)."<br>";

//function anonyme
$_calc = function(int $_number){
    return $_number % 2;
};
print "result ".$_calc(14)."<br>";

//fonction avec changement de variable de réf
$_info = function() use (&$_login){
    echo sprintf("Bonjour %s", $_login);
};
$_login = "Alex"; // nouvelle variable de réf
$_info("tony"); // ancienne variable de réf

//fonction fléchée
$_calculator = fn($_nombre) => $_nombre * $_nombre;
print "<br> Resultat : ".$_calculator(5);

//méthode
/*
class DataTime{
    public format($_date){
        return $_date
    }
}

*/
$_date = new DateTime; // instance d'objet
print "<br> Aujourd'hui nous sommes le : ".$_date->format('d/m/Y');


    
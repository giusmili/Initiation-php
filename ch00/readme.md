# 😀 Cours PHP initiation
![logo php](asset/a.png)

> Cour d'initiation php et développement web

```php
<?php

    const title = "PHP started pour débuter";
        
        $_copyright = date("Y");
        $_date = date('Y-m-d');
        $_date_fr = date('d-m-Y');
        $_version = phpversion();
        $_user_agent =  $_SERVER['HTTP_USER_AGENT'];
        $_server = $_SERVER['SERVER_SIGNATURE'];
        $_address_ip = $_SERVER['SERVER_ADDR'];
        $_style_main = "./css/main.css";
        
        /* pour afficher on a print, print_r, echo et <?= */

        /* 
            class POO
        */
        class User{
            static $_nombre = 1;
            public $_pres ="Hello";
            static $_lang = ["fr","gb","es"];
        }
        $_msg = new User;
?>

```
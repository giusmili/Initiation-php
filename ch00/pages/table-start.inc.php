<main>
<figure>
    <?php
        print "<img src=\"./asset/a.png\" alt=\"php logo\">\n"
    ?>
    <figcaption>
            <h2>
                <?= $_msg->_pres ?>
                    PHP version &nbsp;<?= $_version ?>
            </h2>
    </figcaption>
</figure>
    <section>
        <h2>
            Exemple pour les tableaux   
        </h2>
        <!--table-->
        <pre>
        <?php
            $_table_lang = ["html","php", 8.5];
            $_table_lang_pays = ["en","it","fr"];
            $_el = "Python";
            
           
            // var_dump($_table_lang);
            
            
            array_shift($_table_lang); /* dépile un élément du tableau */
            print_r($_table_lang);
           
           
            array_unshift($_table_lang, $_el); /* ajoute un élément dans un tableau au début */
            array_push($_table_lang,"JSon");/* ajoute à la fin un élément */
            print_r($_table_lang);
            $_global_table = [];

            $_global_table = array_merge($_table_lang, $_table_lang_pays); //fusionner  2 table 
           
            print_r($_global_table);
            print "Dans ce tableau il y a ".count($_global_table)." éléments";

            
            //i<-i + 1

            /* for( $_i = 10; $_i >= 0; $_i--){
                print $_i."<br>";
            }
            for( $_i = 0; $_i <=10; $_i++){
                print $_i."<br>";
            } 
            */

           /*
           for($_i = 0; $_i < count($_global_table); $_i++ ){
                print $_i." ".$_global_table[$_i]."<br>";
            } 
            */
           print "</pre>\n" ;
            $_i = 0;
            print "<ol>\n";
                while($_i < count($_global_table)){
                    
                    print "<li>".($_i+1)." : ".$_global_table[$_i]."</li>\n";
                    $_i++;
                    
                }
            print "</ol>\n";

            // tableau clé et valeur
            const user = array(
                "Nom" => "Ledorf",
                "Prenom" => "Rasmus",
                "Ville" => "Copenaghen",
                "Pays" => "Danemark",
                "Mail"=> "l.rasmus@php.net"
            );
           /*  print "<pre>";
                print_r(user);
            print "</pre>"; */
        print "<ul class=\"user\">\n";
            foreach (user as $_key => $_value) {
                /* conditions ternaire */
                $_key !== "Mail" ?
                    print "<li>".$_key." : ".$_value."</li>\n"
                    :
                    print '<li>'.$_key.'<a href="mailto:'.$_value.'"> '.$_value.'</li>';
                }
        print "</ul>\n";
        
        /* tableaux multidimentionnel */
        $_supertable = [
            1=>["code"=>"html","status"=>true],
            2=>["code"=>"php","status"=>true],
            3=>["code"=>"js","status"=>0]
        ];
        print "<pre>";
            print_r($_supertable);
            
        print "</pre>";

        print "<ul class=\"user\">\n";
            foreach ($_supertable as $_key => $_value) {
                foreach ($_value as $_key => $_valeurs) {
                    print "<li>".$_key." : ".$_valeurs."</li>";
                }
               
            }
        print "</ul>\n";

        ?>
    </section>
</main>
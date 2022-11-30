<main>
        <figure>
            <?php
               print "<img src=\"./asset/a.png\" alt=\"php logo\">"
            ?>
            <figcaption>
                <h2><?= $_msg->_pres ?>
                    PHP version &nbsp;<?= $_version ?>
                </h2>
            </figcaption>
        </figure>
        <section>
            <h2>
                <?= User::$_nombre ?>&nbsp;
               Dernière connexion du : <time 
                                            datetime="<?= $_date ?>">
                                            <?= $_date_fr ?>
                                       </time>   
            </h2>
            <p>
                Votre navigateur est : <?=  $_user_agent ?><br>
                Votre adress IP est le : <?= $_address_ip."<br> ".$_server ?>
                <pre>
                <?php
                     //print_r($_lang)
                ?>
                </pre>
                <?php
                    // var_dump($_version)
                ?>
            </p>
           

        </section>
    </main>
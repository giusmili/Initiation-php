<?php
    include_once "./pages/var_php.inc.php";
    include_once "./pages/head.inc.php";
?>

<body>
    <header>
        <h1>
            <span 
                aria-hidden="true">
                &#128640;
            </span> 	
            <?php print title."&nbsp;".$_version ?>
        </h1>
    </header>
    <!--ici main -->
    <?php
        include_once "./pages/main.inc.php";
    ?>
    <footer>
        <p>
            &copy; - MIT - <time datetime="<?= $_date ?>">
                <?php 
                    print $_copyright 
                ?>
            </time>
        </p>
    </footer>
    <!-- <pre>
    <?php
        // phpinfo()
        // print_r($_SERVER)
    ?>
    </pre> -->
    <!-- display : block -->
</body>
</html>
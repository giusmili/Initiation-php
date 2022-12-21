<?php
    include_once "./pages/var_php.inc.php";
    include_once "./pages/head.inc.php";
?>

<body>
<main>
    <!-- les fonctions -->
    <section>
        <h2>
            Les fonctions
        </h2>
        <?php
            include_once("./pages/functions.inc.php");
        ?>
    </section>
</main>
<footer>
        <p>
            &copy; - MIT - <time datetime="<?= $_date ?>">
                <?php 
                    print $_copyright 
                ?>
            </time>
        </p>
    </footer>
</body>
</html>
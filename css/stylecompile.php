<?php

    // Fichier permettant de compiller les différentes feuilles de style Less

    require "lessc.inc.php";

    $less = new lessc;
    echo $less->compileFile("style.less");
?>
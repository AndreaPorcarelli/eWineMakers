<?php
/**
 * Copyright © 2010. All rights reserved
 * Questo software è soggetto ad un contratto con valore legale, pertanto non può essere ne rivenduto, ne ceduto a terzi
 * Questo copyright non può essere rimosso, ne modificato 
 * Handcoded nella persona di Andrea Porcarelli è l'unico titolare del software
 */
session_start();
ob_start();
error_reporting(E_ALL & ~E_NOTICE);
putenv("TZ=Europe/Rome");
echo "I";
define('FROM_HOME',true);
require("cp/includes/config.php");
require("cp/includes/init.php");
$dirthemes=$dirsito."/themes/".$sito['template'];
require("themes/".$sito['template']."/index.php");
#TEST
?>

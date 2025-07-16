<?php
$prefixUrl = '/phptest/';
$url = $_SERVER['REQUEST_URI'];

if ($url == $prefixUrl. ''){
    require('./home.php');
}
else if ($url == $prefixUrl. 'contact'){
    require ('./contact.php');
}
else if ($url == $prefixUrl. 'mention'){
    require ('./mention.php');
}
else {
    require('./page404.php');
}
?>
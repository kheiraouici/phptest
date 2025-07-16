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
<a href="./home.php">home</a>
<a href="./contact.php">contact</a>
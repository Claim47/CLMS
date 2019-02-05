<?php
$menu['Home'] ='index.php';
$menu['Scoring'] ='scoring.php';
$menu['Live Games'] ='liveGames.php';
$menu['Schedule'] ='';
$menu['Results'] ='';
$menu['Stats'] ='';
$menu['Team Admin'] ='login.php';
$menu['Club Admin'] ='login.php';
$menu['Club Admin'] ='login.php';


function desktopMenu($pages)
{
    foreach($pages as $key => $value) {
        echo "<li>   <a href=".$value.">".$key."</a></li>";
      }
    
}
function sideMenu($pages)
{
    foreach($pages as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
      }
    
}
?>
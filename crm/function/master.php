<?php
session_start();
require_once('../db/config.php');

?>

<div id="header" style="position: fixed">
    <?php
    $homepage = file_get_contents('header.php');
    echo $homepage;
?>
  
 </div>

<div id="maindiv" style="width:100%;text-align: center">
    <div id="div2" style="margin-top: 70px;">  <?php
    $homepage = file_get_contents('menu.php');
    echo $homepage;
    ?>
</div>

<div id="div3" style="margin-top: 70px;background-color:orange;">
<?php
echo "welcome:".$_SESSION['userid'];
?>
    </div></div>


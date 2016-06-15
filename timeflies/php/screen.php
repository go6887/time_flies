<?php

$db_host = 'localhost';
$db_name = 'textbox';
$db_user = 'root';
$db_pass = 'sch1ph0ldb';

// connect database
$link = mysqli_connect( $db_host, $db_user, $db_pass, $db_name );
if ( $link !== false ) {

    $msg     = '';
    $err_msg = '';

    $query  = "SELECT * FROM (SELECT * FROM `board` ORDER BY id DESC LIMIT 10) AS t WHERE comment NOT LIKE '%terror%'
    OR comment NOT LIKE '%attack%'
    OR comment NOT LIKE '%bomb%'
    OR comment NOT LIKE '%bomb%'
    OR comment NOT LIKE '%fuck%'
    OR comment NOT LIKE '%isis%'
    OR comment NOT LIKE '%shit%'
    OR comment NOT LIKE '%muslim%'
    OR comment NOT LIKE '%islam%'
    OR comment NOT LIKE '%explosion%'
    OR comment NOT LIKE '%gun%'
    OR comment NOT LIKE '%victim%'
    OR comment NOT LIKE '%knife%'
    OR comment NOT LIKE '%molotov%'
    OR comment NOT LIKE '%shooting%'
    OR comment NOT LIKE '%hostage%'
    ORDER BY RAND() LIMIT 1";

    $res    = mysqli_query( $link,$query );
    $data = array();
    while( $row = mysqli_fetch_assoc( $res ) ) {
        array_push( $data, $row);
    }
    arsort( $data );

} else {
    echo "failed to connect database";
}

// close database
mysqli_close( $link );
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SCREEN</title>
  <link rel="stylesheet" href="../css/screen.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="../js/move.js"></script>
  <script src="../js/jquery.vide.js"></script>
  <script>
$(function(){
  $('body').vide('../paper6');
});
</script>
<script type="text/javascript">
    setTimeout("location.reload()",1000*11.0);　
  </script>

</head>
<div id="plate" class="front">
              <img id="img" class="image" src="../images/worry.png" width="100px" height="95px" alt="" />
              <p class="message"　>
                <?php
                  foreach( $data as $key => $val ){
                      echo  $val['comment'] ;
                  }
              ?>
            </p>
        </div>

        <div id="container" class="beginning">
            <div id="left-wing">
                <div class="top_left curvable"> </div>
                <div class="bottom_left curvable"> </div>
                <div class="wing wing1"></div>
                <div class="wing wing2"></div>
            </div>

            <div id="right-wing">
                <div class="top_right curvable"> </div>
                <div class="bottom_right curvable"> </div>
                <div class="wing wing3"></div>
                <div class="wing wing4"></div>
            </div>

        </div>
</body>
</html>

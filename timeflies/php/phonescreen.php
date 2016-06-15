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

    if ( isset( $_POST['send'] ) === true ) {

        $name     = $_POST['name']   ;
        $comment = $_POST['comment'];

        if ( $name !== '' || $comment !== '' ) {

            $query = " INSERT INTO board ( "
                   . "    name , "
                   . "    comment "
                   . " ) VALUES ( "
                   . "'" . mysqli_real_escape_string( $link, $name ) ."', "
                   . "'" . mysqli_real_escape_string( $link, $comment ) . "'"
                   ." ) ";

            $res   = mysqli_query( $link, $query );

            if ( $res !== false ) {
                $msg = 'successed';
            }else{
                $err_msg = 'failed';
            }
        }else{
            $err_msg = 'please fill name and comment';
        }
    }


} else {
    echo "failed to connect database";
}

// close database
mysqli_close( $link );
?>

<?php
session_start();
$_SESSION["name"] = $name;
$_SESSION["comment"] = $comment;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SCREEN</title>
  <link rel="stylesheet" href="../css/phonescreen.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="../js/move.js"></script>
  <script src="../js/jquery.vide.js"></script>
  <script>
$(function(){
  $('body').vide('../paper6');
});
</script>
</head>
<body>

<div class="wrap">


<div id="plate" class="front">
              <img id="img" class="image" src="../images/worry.png" width="100px" height="95px" alt="" />
              <p class="message"　>
                <?php
                      echo  $_SESSION['comment'];
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
        </div>
        <SCRIPT LANGUAGE="JavaScript">

      function autoLink()
      {
      location.href="http://37.97.136.49/timeflies/php/uploadText.php";
      }
      setTimeout("autoLink()",11000);

      </SCRIPT>
</body>
</html>

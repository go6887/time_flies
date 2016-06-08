<?php

$db_host = 'localhost';
$db_name = 'textboxes';
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- IE対策 -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> <!-- スマホ画面対策 -->
  <title>Leave Your Worries Behind</title>
  <link rel="stylesheet" href="../css/leave2.css">
</head>
<body>

  <SCRIPT LANGUAGE="JavaScript">

function autoLink()
{
location.href="http://37.97.136.49/timeflies/last.php";
}
setTimeout("autoLink()",4000);

</SCRIPT>
</body>
</html>

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



    $query  = "SELECT id, name, comment FROM board";
    $res    = mysqli_query( $link,$query );
    $data = array();
    while( $row = mysqli_fetch_assoc( $res ) ) {
        array_push( $data, $row);
    }
    arsort( $data );

} else {
    echo "failed to connenct database";
}

// close database
mysqli_close( $link );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- IE対策 -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> <!-- スマホ画面対策 -->
  <title>Leave Your Worries Behind</title>
  <link rel="stylesheet" href="./css/leave3.css">
</head>
<body>
  <div id="container">
    <div class="formessage">
      <p class="great">
          <?php
            session_start();
            echo  "GREAT ".mb_strtoupper($_SESSION['name']).'<br>'." AND"." NOW.." ;
              ?>

       </p>
    </div>
  <div class="form">
    <form method="post" action="">
      <ul>
        <li><a href="index.html"><input id="button" type="button" name="send" value="COLLECT REWARD" width="150px"/></a></li>
        <li><a href="http://twitter.com/intent/tweet?text=<?php echo $_SESSION['comment'] ?>"
          onClick="window.open(encodeURI(decodeURI(this.href)),
          'tweetwindow',
          'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=1'
          ); return false;">
        <input id="button" type="button" name="send" value="SHARE" width="150px"/></a></li>
        <li><input id="button" type="button"  name="send" value="DONE" onClick="javascript:window.close();" width="150px"/></li>
     </ul>
   </form>
  </div>
  </div>

</body>
</html>
